<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\AdminModel;

class UserController extends Controller
{
    public function __construct()
    {
        $this->AdminModel = new AdminModel();
    }
    public function powderuser()
    {
        $data = [
            'userpowder' => $this->AdminModel->powderData(),
        ];
        return view('v_userpowder', $data);
    }

    public function mascarauser()
    {
        $data = [
            'usermascara' => $this->AdminModel->mascaraData(),
        ];
        return view('v_usermascara', $data);
    }

    public function foundationuser()
    {
        $data = [
            'userfoundation' => $this->AdminModel->foundationData(),
        ];
        return view('v_userfoundation', $data);
    }

    public function liptintuser()
    {
        $data = [
            'userliptint' => $this->AdminModel->liptintData(),
        ];
        return view('v_userliptint', $data);
    }

    public function blushonuser()
    {
        $data = [
            'userblushon' => $this->AdminModel->blushonData(),
        ];
        return view('v_userblushon', $data);
    }

    public function browpenciluser()
    {
        $data = [
            'userbrowpencil' => $this->AdminModel->browpencilData(),
        ];
        return view('v_userbrowpencil', $data);
    }

    ////////////////////////////////////////////////////////////////////////////////////

    public function userpowder($no_produk)
    {
        if (!$this->AdminModel->userpowderData($no_produk)) {
            abort(404);
        }
        $data = [
            'powder' => $this->AdminModel->userpowderData($no_produk),
        ];
        $contoh = [
            'reviewpowder' => $this->AdminModel->reviewpowderData($no_produk),
        ];
        return view('productdetailpowder', $data, $contoh);
    }

    public function usermascara($no_produk)
    {
        if (!$this->AdminModel->usermascaraData($no_produk)) {
            abort(404);
        }
        $data = [
            'mascara' => $this->AdminModel->usermascaraData($no_produk),
        ];
        $contoh = [
            'reviewmascara' => $this->AdminModel->reviewmascaraData($no_produk),
        ];
        return view('productdetailmascara', $data, $contoh);
    }


    public function userliptint($no_produk)
    {
        if (!$this->AdminModel->userliptintData($no_produk)) {
            abort(404);
        }
        $data = [
            'liptint' => $this->AdminModel->userliptintData($no_produk),
        ];
        $contoh = [
            'reviewliptint' => $this->AdminModel->reviewliptintData($no_produk),
        ];
        return view('productdetailliptint', $data, $contoh);
    }

    public function userfoundation($no_produk)
    {
        if (!$this->AdminModel->userfoundationData($no_produk)) {
            abort(404);
        }
        $data = [
            'foundation' => $this->AdminModel->userfoundationData($no_produk),
        ];
        $contoh = [
            'reviewfoundation' => $this->AdminModel->reviewfoundationData($no_produk),
        ];
        return view('productdetailfoundation', $data, $contoh);
    }

    public function userblushon($no_produk)
    {
        if (!$this->AdminModel->userblushonData($no_produk)) {
            abort(404);
        }
        $data = [
            'blushon' => $this->AdminModel->userblushonData($no_produk),
        ];
        $contoh = [
            'reviewblushon' => $this->AdminModel->reviewblushonData($no_produk),
        ];
        return view('productdetailblushon', $data, $contoh);
    }

    public function userbrowpencil($no_produk)
    {
        if (!$this->AdminModel->userbrowpencilData($no_produk)) {
            abort(404);
        }
        $data = [
            'browpencil' => $this->AdminModel->userbrowpencilData($no_produk),
        ];
        $contoh = [
            'reviewbrowpencil' => $this->AdminModel->reviewbrowpencilData($no_produk),
        ];
        return view('productdetailbrowpencil', $data, $contoh);
    }
}