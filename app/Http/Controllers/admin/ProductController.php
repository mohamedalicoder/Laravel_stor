<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;
use App\Models\Color;
use App\Models\product_color;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{

    // public function __construct()
    // {
    //         $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with(['get_category','get_color'])->get();
        return view('backend.product.product')->with('data',$products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $colors = Color::all();
        $cats=Category::all();
        return view('backend.product.add_product')->with(['cats'=>$cats ,'colors'=>$colors]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        
        $validator = Validator::make($request->all(), $this->rules , $this->messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
    

        // ===================upload file==============
           $new_name= $this->upload_file($request->img);
           $data=$request->all();
           $data['img']=$new_name;
        // ===================upload file==============

        $product=Product::create($data);
        $product->get_color()->attach($request->color_id);

        // for ($i=0; $i <count($request->color_id) ; $i++) {

        //     product_color::create([
        //         'product_id'=>$product->id,
        //         'color_id'=>$request->color_id[$i],
        //     ]);
        // }
        return redirect('product');
    }


    public function upload_file($file){
        $path='uploads';
        $file_ext =  $file->getClientOriginalExtension();
        $file_name = time().'.'.$file_ext;
        $file->move($path,$file_name);
       return $file_name;
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
        $selected_colors=product_color::where('product_id',$id)->pluck('color_id')->toArray();
        $colors = Color::all();
        $cats=Category::all();
        $product = Product::find($id);
        return view('backend.product.edit')
        ->with(['product'=> $product , 'cats'=>$cats ,'colors'=>$colors ,'selected_colors'=>$selected_colors ]);
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
        
        $validator = Validator::make($request->all(), $this->rule_update , $this->messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
    

        if($request->img){
        // ===================upload file==============
        $new_name= $this->upload_file($request->img);
        $data=$request->all();
        $data['img']=$new_name;
        // ===================upload file==============

        Product::where('id',$id)->update([
            'name'=>$request->name,
            'price'=>$request->price,
            'img'=>$new_name
        ]);
        }else{

            Product::where('id',$id)->update([
                'name'=>$request->name,
                'price'=>$request->price,
            ]);
        }

        $product=Product::find($id);
        $product->get_color()->sync($request->color_id);

        return redirect('product');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::find($id)->delete();
        product_color::where('product_id',$id)->delete();
        return redirect()->back();
    }


   public $rules = [
        'name' => 'required|max:10',
        'price' => 'required',
        'img'=>'mimes:jpg,bmp,png|max:10000000'
   ];
   public $rule_update = [
        'name' => 'required|max:10',
        'price' => 'required',
   ];

   public $messages = [
    'name.required'=>'الاسم مطلوب',
    'name.max'=>'  فارس صلاح الديب  لايسمح اهم حاجه الرولز'
   ];


}
