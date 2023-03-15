<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\Shop;
use Validator;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $shops = [];
        if ($request->ajax()) {
            $data = Shop::orderBy('id', 'DESC')->get();
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
                    $btn = '<div class="col-md-8 row">
                    <a data-toggle="tooltip" href="'.route('shop.edit',$row->id).'" class="btn btn-primary btn-sm btn-edit ml-1"><i class="icon-pencil"></i>Eidt</a>
                    <a data-toggle="tooltip" href="'.route('shop.delete',$row->id).'" class="btn btn-danger btn-sm btn-edit ml-1"><i
                    class="icon-trash2"></i>Delete</a>
                    </div>';
                    return $btn;
                })
                ->rawColumns(['check','action'])
                ->make(true);
        }
        return view('shop.index', compact('shops'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('shop.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'price' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg',
            'try_image' => 'required|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $img = $request->image;
        $shop_img = time() . '-' . $img->getClientOriginalName();
        $img->move(public_path('assets/shop/'),$shop_img);

        $img1 = $request->try_image;
        $try_image = time() . '-' . $img1->getClientOriginalName();
        $img1->move(public_path('assets/shop/'),$try_image);

        Shop::create([
            'title'=>$request->title,
            'price'=>$request->price,
            'discounted'=>$request->discounted,
            'image'=>$shop_img,
            'try_image'=>$try_image,
            'description'=>$request->description,
        ]);
        return redirect()->route('shop.index')->with('success','Product successfully added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $shop = Shop::find($id);
        return view('shop.edit',compact('shop'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'mimes:jpeg,png,jpg,gif,svg',
            'try_image' => 'mimes:jpeg,png,jpg,gif,svg',
            'price' => 'required',
        ]);

        $shop = Shop::find($id);
        if($request->image){
            $isExists = File::exists('assets/shop/'.$shop->image);
            if ($isExists == true) {
                File::delete(public_path('assets/shop/' . $shop->image));
            }
            $shop_img = time() . rand(1, 99999). "." . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('assets/shop/'),$shop_img);
        }else{
            $shop_img = $shop->image;
        }
        if($request->try_image){
            $isExists = File::exists('assets/shop/'.$shop->try_image);
            if ($isExists == true) {
                File::delete(public_path('assets/shop/' . $shop->try_image));
            }
            $try_image = time() . rand(1, 99999). "." . $request->try_image->getClientOriginalExtension();
            $request->try_image->move(public_path('assets/shop/'),$try_image);
        }else{
            $try_image = $shop->try_image;
        }

        Shop::where('id',$id)->update([
            'title'=>$request->title,
            'price'=>$request->price,
            'discounted'=>$request->discounted,
            'image'=>$shop_img,
            'try_image'=>$try_image,
            'description'=>$request->description,
        ]);
        return redirect()->route('shop.index')->with('success','Product successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function delete($id)
    {
        Shop::where('id', $id)->delete();
        return redirect()->route('shop.index')->with('success', '<i class="icon-tick"></i><strong>Well done!</strong>, Success');
    }

    public function deleteAll(Request $request)
    {
        $ids = $request->ids;
        $shops = Shop::whereIn('id', $ids)->delete();
        if ($shops) {
            $arr = ["success" => true, "message" => 'Selected Products Delete successfully.'];
            return $arr;
        }
    }
}
