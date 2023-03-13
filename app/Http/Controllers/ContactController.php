<?php

namespace App\Http\Controllers;

use App\Models\Cms;
use App\Models\Registration_submissions;
use App\Models\Contact_submissions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreCmsRequest;
use App\Http\Requests\UpdateCmsRequest;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = [];
        if ($request->ajax()) {
            $data = Contact_submissions::orderBy('id', 'DESC')->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->editColumn('check', function($row1){
                    $btn1 = '<div class="custom-control custom-checkbox">
                        <input class="custom-control-input values" name="userselect[]"
                        value="'.$row1->id.'" type="checkbox" id="' . $row1->id.'">
                        <label class="custom-control-label" for="' . $row1->id.'"></label>
                        </div>';

                return $btn1;
                })
                ->addColumn('action', function($row){
//                    $btn = '<div class="col-md-8 row">
//                    <a data-toggle="tooltip" href="'.route('formation.edit',$row->id).'" class="btn btn-primary btn-sm btn-edit ml-1"><i
//                    class="icon-pencil"></i>Edit</a> <a data-toggle="tooltip" href="'.route('formation.destroy',$row->id).'" class="btn btn-danger btn-sm btn-edit ml-1"><i
//                    class="icon-trash2"></i>Delete</a>
//                    </div>';

                    $btn = '<div class=" row">
<a data-toggle="tooltip" href="'.route('contact.edit',$row->id).'" class="btn btn-primary btn-sm btn-edit ml-1"><i class="icon-eye2"></i>View</a>
                    <a data-toggle="tooltip" href="'.route('contact.destroy',$row->id).'" class="btn btn-danger btn-sm btn-edit ml-1"><i
                    class="icon-trash2"></i>Delete</a>
                    </div>';

                    return $btn;
                })
                ->rawColumns(['check','region','action'])
                ->make(true);
        }
        return view('contact.list', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd($id);
        $user = Contact_submissions::where('id',$id)->first();
        $columns = Schema::getColumnListing('contact_submissions');
        $data['result'] = ['method' => 'edit'];
        return view('contact.preview', $data, compact('user', 'columns'));
    }

        /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cms  $cms
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact_submissions $contact_submissions, $id)
    {
        $card = Contact_submissions::where('id', $id)->delete();
        return redirect()->route('contact.index')->with('success', '<i class="icon-tick"></i><strong>Well done!</strong>, Success');
    }

    public function deleteAll(Request $request)
    {
        $ids = $request->ids;
        $cms = Contact_submissions::whereIn('id', $ids)->delete();
        if ($cms) {
            $arr = ["success" => true, "message" => 'Selected contact Registrations Delete successfully.'];
            return $arr;
        }
    }

    public function status($id, $status)
    {
        // dd($id, $status);
        $user = Contact_submissions::where('id', $id)->update(array('status' => $status));
        // dd($user);
        return redirect()->route('contact.index');
    }
}
