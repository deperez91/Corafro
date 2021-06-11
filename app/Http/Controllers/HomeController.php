<?php


namespace App\Http\Controllers;
use View;
use Throwable;
use Inertia\Inertia;
use App\Mail\MessageReceived;
use App\Models\Mss;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //  $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('inicio');
    }

    public function inicio()
    {
        return view('inicio');
    }
    public function donacion()
    {
        return view('donacion');
    }

    public function nosotros()
    {
        return view('nosotros');
    }

    public function actividad()
    {
        return view('actividad');
    }

    public function contacto()
    {
        

        $mensaje = null;
        if (isset($_POST['contacto']))
        {
            $data = array(
                'nombre' => Input::get('nombre'),
                'email' => Input::get('email'),
                'telefono' => Input::get('telefono'),
                'mensaje' => Input::get('mensaje')
            );
            $fromEmail = 'fundacioncorafro@gmail.com';
            $fromName = 'Administrador';
            Mail::send('emails.emergency_call', $data, function($message) use ($fromName, $fromEmail)
            {
                $message->to($fromEmail, $fromName);
                $message->to('fundacioncorafro@gmail.com');
                $message->from($fromEmail, $fromName);
                $message->subject('Asunto del correo');
            });
         //   $mensaje = '<div class="text-info">Mensaje enviado con éxito</div>';
        }
       // return view::make('contacto', array('mensaje' => $mensaje));



        
        return view('contacto');
        return view('tasks.contacto');
    }
    /*
    public function create(){
        return view('men.create');
    }
    */
    public function message(Request $request){




        $message['nombre']= $request -> nombre;
        $message['email']= $request -> email;
        $message['telefono']= $request -> telefono;
        $message['mensaje']= $request -> mensaje;


       $message = request()->validate([
           'nombre'=>'required|max:50',
           'email'=>'required',
           'telefono'=>'required|max:10',
           'mensaje'=>'required|max:255'
       ]);


       //$message = new MessageReceived;
       Mail::to('fundacioncorafro@gmail.com')->send(new MessageReceived($message));

        return redirect('/contacto')->with('success', 'Mensaje enviado correctamente');

        
/*
        $mss = new Mss();

        $mss->nombre = $request->nombre;
        $mss->email = $request->email;
        $mss->telefono = $request->telefono;
        $mss->mensaje = $request->mensaje;
        $mss->save();
*/

    }

 /** * Prepare exception for rendering. * * @param \Throwable $e * @return \Throwable */
/*    public function render($request, Throwable $e)
{
    $response = parent::render($request, $e);

    if ($response->status() === 419) {
        return back()->with([
            'message' => 'The page expired, please try again.',
        ]);
    }

    return $response;
}
    public function show($id) {
         $mss = Mss::find($id);
         return view('men.show', compact('course'));
    }
    */
}
