<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail; //Importante incluir la clase Mail, que será la encargada del envío

class EmailController extends Controller
{

    public function contact(Request $request){
        $subject = $request->input('subject');
        $for = "informacion@paraisodown.org";
        if ($request->input('subject') != null && $request->input('name') != null && $request->input('email') != null
            && $request->input('message') != null) {
            Mail::send('email',$request->all(), function($msj) use($subject,$for){
                $msj->from("pagina@paraisodown.org", "Mensaje enviado desde sitio web");
                $msj->subject($subject);
                $msj->to($for);
            });
            \Session::flash('flash_message2','Correo enviado con exito!');   
        } else{
            \Session::flash('flash_message','Debe llenar todos los campos!');   
        }
        return redirect()->back();
    }
}
?>