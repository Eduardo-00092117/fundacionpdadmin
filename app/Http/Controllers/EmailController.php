<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail; //Importante incluir la clase Mail, que será la encargada del envío

class EmailController extends Controller
{

    public function contact(Request $request){
        if ($_POST['g-recaptcha-response'] == '') {
            \Session::flash('flash_message','Captcha invalido!');    
            return redirect()->back(); 
        } {
            $obj = new \stdClass();
            $obj->secret = "6Ld-aCscAAAAAE5z1OTwNXALYeiUw7qQzxiKGb8j";
            $obj->response = $_POST['g-recaptcha-response'];
            $obj->remoteip = $_SERVER['REMOTE_ADDR'];
            $url = 'https://www.google.com/recaptcha/api/siteverify';

            $options = array(
            'http' => array(
            'header' => "Content-type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => http_build_query($obj)
            )
            );
            $context = stream_context_create($options);
            $result = file_get_contents($url, false, $context);

            $validar = json_decode($result);

            if ($validar->success) {
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
            }else {
                \Session::flash('flash_message','Captcha invalido!');   
                return redirect()->back();
            }
        }
    }
}
?>