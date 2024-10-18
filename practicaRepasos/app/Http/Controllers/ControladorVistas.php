<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorVistas extends Controller
{
    public function portada(){
        return view('portada');
    }

    public function repaso(){
        return view('repaso');
    }

    //funcion para conversiones
    public function convertir(Request $request){

        $valor = $request->input('valor');
        $conversion = $request->input('conversion');
        $r = '';
        switch($conversion){
            case 'MB_GB':
                $r=$valor.'MB es igual a'.$valor/1024;
                break;

                case 'GB_MB':
                    $r = $valor.'MB es igual a'.$valor * 1024;
                    break;

                    case 'GB_TB':
                        $r = $valor.'MB es igual a'.$valor/1024;
                        break;

                        case 'TB_GB':
                            $r = $valor.'MB es igual a'.$valor*1024;
                            break;

                            default:
                            $r = 'Llena de nuevo';
        }
       return view('repaso', ['r'=>$r]);
       //return $request->all();

    }
}
