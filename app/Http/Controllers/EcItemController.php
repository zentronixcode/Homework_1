<?php

namespace App\Http\Controllers;
use Session;
use App\Ec_item;
use App\Ec_cat;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ECItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Ec_item::with('Ec_cat')->paginate(5);
        $data1 = Ec_cat::all();
        return view('ec/ec', ['data'=>$data,'data1'=>$data1]);
        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->isMethod('POST')) {
            $this->validate($request, [
                'photo' => 'file|mimes:image,jpg,png'
            ]);
            if ($request->hasFile('photo')) {
                $file = $request->file('photo');
                $photo = date('d-m-y').'_'.$file->getClientOriginalName();
                $file->move(public_path().'/photo/',$photo);
            }
            $save = Ec_item::create([
                'product_name' => $request->input('product_name'),
                'amount' => $request->input('amount'),
                'price' => $request->input('price'),
                'photo'=> $photo,
                'cat_id' => $request->input('cat_id'),
            ]);
            Session::flash('create_success','Create data success');
            return back();
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ec_item  $Ec_item
     * @return \Illuminate\Http\Response
     */
    public function show(Ec_item $Ec_item)
    {
        
        $data = Ec_item::with('Ec_cat')->where('id', $Ec_item->id)->get();
        $data1 = Ec_cat::all();
        return view('ec/update', ['data'=>$data,'data1'=>$data1]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ec_item  $Ec_item
     * @return \Illuminate\Http\Response
     */
    public function edit(Ec_item $Ec_item)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ec_item  $Ec_item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ec_item $Ec_item)
    {
        if ($request->isMethod('PUT')) {
        $this->validate($request, [
            'photo' => 'file|mimes:image,jpg,png'
        ]);
        if ($request->hasFile('new_photo')) {
            $photo = $request->file("new_photo");
            $photo_name=date('d-m-y').'_'.$photo->getClientOriginalName();
            $photo->move(public_path().'/photo/',$photo_name);
            $final_photo= $photo_name;
        }else {
            $final_photo = $request->input('old_photo');
        }
        $where = Ec_item::where('id', $request->input('id_item'));
        $where->update([
            'product_name' => $request->input('product_name'),
            'amount' => $request->input('amount'),
            'price' => $request->input('price'),
            'photo'=> $final_photo,
            'cat_id' => $request->input('cat_id'),
        ]);
        }
        Session::flash('update_success','Update data success');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ec_item  $Ec_item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ec_item $Ec_item)
    {
        $delete=$Ec_item->delete();
        Session::flash('delete_success','Delete data success');
        return back();
    }
    public function search(Request $request)
	{
		
		$search = $_GET['search'];
        $data1 = Ec_cat::all();
        // $data = DB::table('ec_items')
		// ->where('product_name','like',"%".$search."%")->with('ec_cats')
        // ->paginate(); 
        $data = Ec_item::with('Ec_cat')->where('product_name','like',"%".$search."%")->paginate();
        return view('ec/ec',['data'=>$data,'data1'=>$data1]);
 
	}
}
