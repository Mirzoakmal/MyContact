<?php

namespace App\Http\Controllers;
use App\Spisok;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class SpisokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     //Читаем все записи из модели Spisok и присваиваем в $spisok_contactov
       $spisok_contactov = Spisok::all() ;
      /*вернем данные в страницу glavnoe.blade.php расположение которого будет в index, т.е. в "/"
      и присвоим значения переменной $spisok_contactov в spis_cont для отображения на главной*/
        return view('glavnoe',['spis_cont'=>$spisok_contactov,'layout'=>'index']);
    }

    public function iz_spis()
    {
      /*
     $per = 'i';
     $izb_contact = Spisok::where('izbrannie', 'i');
     /*$izb_contact->orderBy('id', 'desc');
     $izb_contact->get();*/
     $izb_contact = DB::select('select * from spisoks where izbrannie = "i"');

     return view('glavnoe',['spis_cont'=>$izb_contact,'layout'=>'iz_spis']);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('glavnoe',['layout'=>'create']);
    }


    public function novie()
    {
     //Читаем все записи из модели Spisok и присваиваем в $spisok_contactov
        $spisok_contactov = Spisok::all() ;
      /*вернем данные в страницу glavnoe.blade.php расположение которого будет в index, т.е. в "/"
      и присвоим значения переменной $spisok_contactov в spis_cont для отображения на главной*/
        return view('glavnoe',['spis_cont'=>$spisok_contactov,'layout'=>'novie']);
    }

    public function izbrannie(Request $request, $id)
    {
      $izb_contact = Spisok::find($id);
      $izb_contact->izbrannie = "i";
      $izb_contact->save();
      return redirect('/');
    }
/*
    public function izbrannie()
    {
      $izb_contact = Spisok::where('izbrannie','i');
      $izb_contact->orderBy('id', 'desc');
      $izb_contact->get();
      return redirect('/izbrannie');
    }*/
      /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $new_contact = new Spisok();
      $new_contact->fullname = $request->input('FIO');
      $new_contact->company = $request->input('COMPANY');
      $new_contact->speciality = $request->input('SPECIALITY');
      $new_contact->mob_tel = $request->input('MOB_TEL');
      $new_contact->email = $request->input('EMAIL');
      $new_contact->groupe = $request->input('GROUPE');
      $new_contact->save();
      return redirect('/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $show_contact = Spisok::find($id);
      return view('show',['contact'=>$show_contact,'layout'=>'show']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $edit_contact = Spisok::find($id);
      return view('glavnoe',['ed_cont'=>$edit_contact,'layout'=>'edit']);
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
      $upd_contact = Spisok::find($id);
      $upd_contact->fullname = $request->input('FIO');
      $upd_contact->company = $request->input('COMPANY');
      $upd_contact->speciality = $request->input('SPECIALITY');
      $upd_contact->mob_tel = $request->input('MOB_TEL');
      $upd_contact->email = $request->input('EMAIL');
      $upd_contact->groupe = $request->input('GROUPE');
      $upd_contact->save();
      return redirect('/');
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
}
