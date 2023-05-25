<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\AdminModel;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->AdminModel = new AdminModel();
        $this->middleware('auth');
    }

////////////////////////////////////////////////////////////////////////////

    public function powderlist()
    {
        $data = [
            'powder' => $this->AdminModel->powderData(),
        ];
        return view('layouts.v_listpowder', $data);
    }

    public function mascaralist()
    {
        $data = [
            'mascara' => $this->AdminModel->mascaraData(),
        ];
        return view('layouts.v_listmascara', $data);
    }

    public function liptintlist()
    {
        $data = [
            'liptint' => $this->AdminModel->liptintData(),
        ];
        return view('layouts.v_listliptint', $data);
    }

    public function blushonlist()
    {
        $data = [
            'blushon' => $this->AdminModel->blushonData(),
        ];
        return view('layouts.v_listblushon', $data);
    }

    public function browpencillist()
    {
        $data = [
            'browpencil' => $this->AdminModel->browpencilData(),
        ];
        return view('layouts.v_listbrowpencil', $data);
    }

    public function foundationlist()
    {
        $data = [
            'foundation' => $this->AdminModel->foundationData(),
        ];
        return view('layouts.v_listfoundation', $data);
    }

    ////////////////////////////////////////////////////

    public function admascara()
    {
        $data = [
            'mascara' => $this->AdminModel->admascaraData(),
        ];
        return view('layouts.v_reviewmascara', $data);
    }

    public function adliptint()
    {
        $data = [
            'liptint' => $this->AdminModel->adliptintData(),
        ];
        return view('layouts.v_reviewliptint', $data);
    }

    public function adpowder()
    {
        $data = [
            'powder' => $this->AdminModel->adpowderData(),
        ];
        return view('layouts.v_reviewpowder', $data);
    }

    public function adblushon()
    {
        $data = [
            'blushon' => $this->AdminModel->adblushonData(),
        ];
        return view('layouts.v_reviewblushon', $data);
    }

    public function adbrowpencil()
    {
        $data = [
            'browpencil' => $this->AdminModel->adbrowpencilData(),
        ];
        return view('layouts.v_reviewbrowpencil', $data);
    }

    public function adfoundation()
    {
        $data = [
            'foundation' => $this->AdminModel->adfoundationData(),
        ];
        return view('layouts.v_reviewfoundation', $data);
    }
    ////////////////////////////////////////////////////////////

    public function index()
    {
        return view('layouts.v_add');
    }
    ///////////////////////////////////////////////

    public function detail($no_produk)
    {
        if (!$this->AdminModel->detailData($no_produk)) {
            abort(404);
        }
        $data = [
            'product' => $this->AdminModel->detailData($no_produk),
        ];
        return view('layouts.v_detailproduk', $data);
    }

    public function detailfoundation($no_produk)
    {
        if (!$this->AdminModel->detailfoundationData($no_produk)) {
            abort(404);
        }
        $data = [
            'foundation' => $this->AdminModel->detailfoundationData($no_produk),
        ];
        return view('layouts.v_detailfoundation', $data);
    }

    public function detailmascara($no_produk)
    {
        if (!$this->AdminModel->detailmascaraData($no_produk)) {
            abort(404);
        }
        $data = [
            'mascara' => $this->AdminModel->detailmascaraData($no_produk),
        ];
        return view('layouts.v_detailmascara', $data);
    }

    public function detailliptint($no_produk)
    {
        if (!$this->AdminModel->detailliptintData($no_produk)) {
            abort(404);
        }
        $data = [
            'liptint' => $this->AdminModel->detailliptintData($no_produk),
        ];
        return view('layouts.v_detailliptint', $data);
    }

    public function detailbrowpencil($no_produk)
    {
        if (!$this->AdminModel->detailbrowpencilData($no_produk)) {
            abort(404);
        }
        $data = [
            'browpencil' => $this->AdminModel->detailbrowpencilData($no_produk),
        ];
        return view('layouts.v_detailbrowpencil', $data);

    }    
    
    public function detailpowder($no_produk)
    {
        if (!$this->AdminModel->detailpowderData($no_produk)) {
            abort(404);
        }
        $data = [
            'powder' => $this->AdminModel->detailpowderData($no_produk),
        ];
        return view('layouts.v_detailpowder', $data);
    }


    public function detailblushon($no_produk)
    {
        if (!$this->AdminModel->detailblushonData($no_produk)) {
            abort(404);
        }
        $data = [
            'blushon' => $this->AdminModel->detailblushonData($no_produk),
        ];
        return view('layouts.v_detailblushon', $data);
    }
    
    ////////////////////////////////////////////////////////////////////////


    public function add()
    {
        return view('layouts.v_addproduk');
    }

    public function addmascara()
    {
        return view('layouts.v_addmascara');
    }

    public function addliptint()
    {
        return view('layouts.v_addliptint');
    }

    public function addblushon()
    {
        return view('layouts.v_addblushon');
    }

    public function reviewliptint()
    {
        return view('reviewliptint');
    }

    public function addbrowpencil()
    {
        return view('layouts.v_addbrowpencil');
    }

    public function addfoundation()
    {
        return view('layouts.v_addfoundation');
    }

    public function addpowder()
    {
        return view('layouts.v_addpowder');
    }
    
  
    //input barang dari admin
    public function insert()
    {
        Request()->validate([
            'id_produk' => 'required|unique:product,id_produk|min:6|max:6',
            'brand' => 'required',
            'nama_produk' => 'required',
            'keterangan' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png',
            'logo'=> 'required|mimes:png',
        ],[
            'id_produk.required' => 'wajib diisi !!',
            'id_produk.unique' => 'id_produk Sudah Ada !!',
            'id_produk.min' => 'Min 6 Karakter',
            'id_produk.max' => 'Max 6 Karakter'
        ]);

        //upload gambar
        $file = Request()-> image;
        $fileName = Request()->id_produk.'.'.$file->extension();
        $file->move(public_path('foto_produk'), $fileName);

        $file = Request()->logo;
        $fileName1 = Request()->nama_produk.'.'.$file->extension();
        $file->move(public_path('foto_produk'), $fileName1);

        $data = [
            'id_produk' => Request()->id_produk,
            'brand' => Request()->brand,
            'nama_produk' => Request()->nama_produk,
            'image' => $fileName,
            'keterangan' => Request()->keterangan,
        ];

        $this->AdminModel->addData($data);
        return redirect()->route('v_add')->with('pesan','Data Berhasil Di Tambahkan !!');
    }

    public function insertpowder()
    {
        Request()->validate([
            'id_produk' => 'required|unique:tbl_powder,id_produk|min:6|max:6',
            'brand' => 'required',
            'nama_produk' => 'required',
            'keterangan' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png',
            'logo'=> 'required|mimes:png',
            'harga'=> 'required',
        ],[
            'id_produk.required' => 'wajib diisi !!',
            'id_produk.unique' => 'id_produk Sudah Ada !!',
            'id_produk.min' => 'Min 6 Karakter',
            'id_produk.max' => 'Max 6 Karakter'
        ]);

        //upload gambar
        $file = Request()-> image;
        $fileName = Request()->id_produk.'.'.$file->extension();
        $file->move(public_path('foto_produk'), $fileName);

        //upload logo
        $file1 = Request()->logo;
        $fileName1 = Request()->nama_produk.'.'.$file1->extension();
        $file1->move(public_path('foto_produk'), $fileName1);

        $data = [
            'id_produk' => Request()->id_produk,
            'brand' => Request()->brand,
            'nama_produk' => Request()->nama_produk,
            'image' => $fileName,
            'keterangan' => Request()->keterangan,
            'logo'=> $fileName1,
            'harga'=> Request()->harga,
        ];

        $this->AdminModel->addpowderData($data);
        return redirect()->route('v_listpowder')->with('pesan');
    }

    public function insertliptint()
    {
        Request()->validate([
            'id_produk' => 'required|unique:tbl_liptint,id_produk|min:6|max:6',
            'brand' => 'required',
            'nama_produk' => 'required',
            'keterangan' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png',
            'logo'=> 'required|mimes:png',
            'harga'=> 'required',
        ],[
            'id_produk.required' => 'wajib diisi !!',
            'id_produk.unique' => 'id_produk Sudah Ada !!',
            'id_produk.min' => 'Min 6 Karakter',
            'id_produk.max' => 'Max 6 Karakter'
        ]);

        //upload gambar
        $file = Request()-> image;
        $fileName = Request()->id_produk.'.'.$file->extension();
        $file->move(public_path('foto_produk'), $fileName);

        //upload logo
        $file1 = Request()->logo;
        $fileName1 = Request()->nama_produk.'.'.$file1->extension();
        $file1->move(public_path('foto_produk'), $fileName1);        

        $data = [
            'id_produk' => Request()->id_produk,
            'brand' => Request()->brand,
            'nama_produk' => Request()->nama_produk,
            'image' => $fileName,
            'keterangan' => Request()->keterangan,
            'logo'=> $fileName1,
            'harga'=> Request()->harga,
        ];

        $this->AdminModel->addliptintData($data);
        return redirect()->route('v_listliptint')->with('pesan','Data Berhasil Di Tambahkan !!');
    }

    public function insertfoundation()
    {
        Request()->validate([
            'id_produk' => 'required|unique:tbl_foundation,id_produk|min:6|max:6',
            'brand' => 'required',
            'nama_produk' => 'required',
            'keterangan' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png',
            'logo'=> 'required|mimes:png',
            'harga'=> 'required',
        ],[
            'id_produk.required' => 'wajib diisi !!',
            'id_produk.unique' => 'id_produk Sudah Ada !!',
            'id_produk.min' => 'Min 6 Karakter',
            'id_produk.max' => 'Max 6 Karakter'
        ]);

        //upload gambar
        $file = Request()-> image;
        $fileName = Request()->id_produk.'.'.$file->extension();
        $file->move(public_path('foto_produk'), $fileName);

        //upload logo
        $file1 = Request()->logo;
        $fileName1 = Request()->nama_produk.'.'.$file1->extension();
        $file1->move(public_path('foto_produk'), $fileName1);

        $data = [
            'id_produk' => Request()->id_produk,
            'brand' => Request()->brand,
            'nama_produk' => Request()->nama_produk,
            'image' => $fileName,
            'keterangan' => Request()->keterangan,
            'logo'=> $fileName1,
            'harga'=> Request()->harga,
        ];

        $this->AdminModel->addfoundationData($data);
        return redirect()->route('v_listfoundation')->with('pesan','Data Berhasil Di Tambahkan !!');
    }

    public function insertmascara()
    {
        Request()->validate([
            'id_produk' => 'required|unique:tbl_mascara,id_produk|min:6|max:6',
            'brand' => 'required',
            'nama_produk' => 'required',
            'keterangan' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png',
            'logo'=> 'required|mimes:png',
            'harga'=> 'required',
        ],[
            'id_produk.required' => 'wajib diisi !!',
            'id_produk.unique' => 'id_produk Sudah Ada !!',
            'id_produk.min' => 'Min 6 Karakter',
            'id_produk.max' => 'Max 6 Karakter'
        ]);

        //upload gambar
        $file = Request()-> image;
        $fileName = Request()->id_produk.'.'.$file->extension();
        $file->move(public_path('foto_produk'), $fileName);

        //upload logo
        $file1 = Request()->logo;
        $fileName1 = Request()->nama_produk.'.'.$file1->extension();
        $file1->move(public_path('foto_produk'), $fileName1);

        $data = [
            'id_produk' => Request()->id_produk,
            'brand' => Request()->brand,
            'nama_produk' => Request()->nama_produk,
            'image' => $fileName,
            'keterangan' => Request()->keterangan,
            'logo'=> $fileName1,
            'harga'=> Request()->harga,
        ];

        $this->AdminModel->addmascaraData($data);
        return redirect()->route('v_listmascara')->with('pesan');
    }

    public function insertblushon()
    {
        Request()->validate([
            'id_produk' => 'required|unique:tbl_blushon,id_produk|min:6|max:6',
            'brand' => 'required',
            'nama_produk' => 'required',
            'keterangan' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png',
            'logo'=> 'required|mimes:png',
            'harga'=> 'required',
        ],[
            'id_produk.required' => 'wajib diisi !!',
            'id_produk.unique' => 'id_produk Sudah Ada !!',
            'id_produk.min' => 'Min 6 Karakter',
            'id_produk.max' => 'Max 6 Karakter'
        ]);

        //upload gambar
        $file = Request()-> image;
        $fileName = Request()->id_produk.'.'.$file->extension();
        $file->move(public_path('foto_produk'), $fileName);

        //upload logo
        $file1 = Request()->logo;
        $fileName1 = Request()->nama_produk.'.'.$file1->extension();
        $file1->move(public_path('foto_produk'), $fileName1);

        $data = [
            'id_produk' => Request()->id_produk,
            'brand' => Request()->brand,
            'nama_produk' => Request()->nama_produk,
            'image' => $fileName,
            'keterangan' => Request()->keterangan,
            'logo'=> $fileName1,
            'harga'=> Request()->harga,
        ];

        $this->AdminModel->addblushonData($data);
        return redirect()->route('v_listblushon')->with('pesan','Data Berhasil Di Tambahkan !!');
    }

    public function insertbrowpencil()
    {
        Request()->validate([
            'id_produk' => 'required|unique:tbl_browpencil,id_produk|min:6|max:6',
            'brand' => 'required',
            'nama_produk' => 'required',
            'keterangan' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png',
            'logo'=> 'required|mimes:png',
            'harga'=> 'required',
        ],[
            'id_produk.required' => 'wajib diisi !!',
            'id_produk.unique' => 'id_produk Sudah Ada !!',
            'id_produk.min' => 'Min 6 Karakter',
            'id_produk.max' => 'Max 6 Karakter'
        ]);

        //upload gambar
        $file = Request()-> image;
        $fileName = Request()->id_produk.'.'.$file->extension();
        $file->move(public_path('foto_produk'), $fileName);

        //upload logo
        $file1 = Request()->logo;
        $fileName1 = Request()->nama_produk.'.'.$file1->extension();
        $file1->move(public_path('foto_produk'), $fileName1);

        $data = [
            'id_produk' => Request()->id_produk,
            'brand' => Request()->brand,
            'nama_produk' => Request()->nama_produk,
            'image' => $fileName,
            'keterangan' => Request()->keterangan,
            'logo'=> $fileName1,
            'harga'=> Request()->harga,
        ];

        $this->AdminModel->addbrowpencilData($data);
        return redirect()->route('v_listbrowpencil')->with('pesan','Data Berhasil Di Tambahkan !!');
    }

   
    //input review dari user
    public function insertreviewliptint($no_produk, $nama_produk, $name)
    {
        Request()->validate([
            'review'=> 'required',
        ]);

        $data = [
            'review' => Request()->review,
            'no_produk' => $no_produk,
            'nama_produk' => $nama_produk,
            'username' => $name,
        ];

        $this->AdminModel->addreviewliptint($data);
        return redirect()->route('v_userliptint/',[$no_produk]);
    }

    public function insertreviewmascara($no_produk, $nama_produk, $name)
    {
        Request()->validate([
            'review'=> 'required',
        ]);

        $data = [
            'review' => Request()->review,
            'no_produk' => $no_produk,
            'nama_produk' => $nama_produk,
            'username' => $name,
        ];

        $this->AdminModel->addreviewmascara($data);
        return redirect()->route('v_usermascara/',[$no_produk]);
    }

    public function insertreviewblushon($no_produk, $nama_produk, $name)
    {
        Request()->validate([
            'review'=> 'required',
        ]);

        $data = [
            'review' => Request()->review,
            'no_produk' => $no_produk,
            'nama_produk' => $nama_produk,
            'username' => $name,
        ];

        $this->AdminModel->addreviewblushon($data);
        return redirect()->route('v_userblushon/',[$no_produk]);
    }

    public function insertreviewbrowpencil($no_produk, $nama_produk, $name)
    {
        Request()->validate([
            'review'=> 'required',
        ]);

        $data = [
            'review' => Request()->review,
            'no_produk' => $no_produk,
            'nama_produk' => $nama_produk,
            'username' => $name,
        ];

        $this->AdminModel->addreviewbrowpencil($data);
        return redirect()->route('v_userbrowpencil/',[$no_produk]);
    }

    public function insertreviewpowder($no_produk, $nama_produk, $name)
    {
        Request()->validate([
            'review'=> 'required',
        ]);

        $data = [
            'review' => Request()->review,
            'no_produk' => $no_produk,
            'nama_produk' => $nama_produk,
            'username' => $name,
        ];

        $this->AdminModel->addreviewpowder($data);
        return redirect()->route('v_userpowder/',[$no_produk]);
    }

    public function insertreviewfoundation($no_produk, $nama_produk, $name)
    {
        Request()->validate([
            'review'=> 'required',
        ]);

        $data = [
            'review' => Request()->review,
            'no_produk' => $no_produk,
            'nama_produk' => $nama_produk,
            'username' => $name,
        ];

        $this->AdminModel->addreviewfoundation($data, $nama_produk, $name);
        return redirect()->route('v_userfoundation/',[$no_produk]);
    }

 
    //delete data produk
    public function deletebrowpencil($no_produk)
    {
        $this->AdminModel->deletelistbrowpencil($no_produk);
        return redirect()->route('v_listbrowpencil')->with('pesan');
    }

    public function deletefoundation($no_produk)
    {
        $this->AdminModel->deletelistfoundation($no_produk);
        return redirect()->route('v_listfoundation')->with('pesan');
    }

    public function deletemascara($no_produk)
    {
        $this->AdminModel->deletelistmascara($no_produk);
        return redirect()->route('v_listmascara')->with('pesan');
    }

    public function deletepowder($no_produk)
    {
        $this->AdminModel->deletelistpowder($no_produk);
        return redirect()->route('v_listpowder')->with('pesan');
    }

    public function deleteblushon($no_produk)
    {
        $this->AdminModel->deletelistblushon($no_produk);
        return redirect()->route('v_listblushon')->with('pesan');
    }

    public function deleteliptint($no_produk)
    {
        $this->AdminModel->deletelistliptint($no_produk);
        return redirect()->route('v_listliptint')->with('pesan');
    }


    //delete review dari admin
    public function deletereviewpowder($review)
    {
        $this->AdminModel->deletereviewpowder($review);
        return redirect()->route('v_reviewpowder')->with('pesan');
    }

    public function deletereviewmascara($review)
    {
        $this->AdminModel->deletereviewmascara($review);
        return redirect()->route('v_reviewmascara')->with('pesan');
    }

    public function deletereviewblushon($review)
    {
        $this->AdminModel->deletereviewblushon($review);
        return redirect()->route('v_reviewblushon')->with('pesan');
    }

    public function deletereviewliptint($review)
    {
        $this->AdminModel->deletereviewliptint($review);
        return redirect()->route('v_reviewliptint')->with('pesan');
    }

    public function deletereviewbrowpencil($review)
    {
        $this->AdminModel->deletereviewbrowpencil($review);
        return redirect()->route('v_reviewbrowpencil')->with('pesan');
    }

    public function deletereviewfoundation($review)
    {
        $this->AdminModel->deletereviewfoundation($review);
        return redirect()->route('v_reviewfoundation')->with('pesan');
    }



     //Edit Data From Admin
    public function editblushon($no_produk)
    {
        if (!$this->AdminModel->detailblushonData($no_produk)) {
            abort(404);
        }
        $data = [
            'blushon' => $this->AdminModel->detailblushonData($no_produk),
        ];
        return view('layouts.editblushon', $data);
    }

    public function editpowder($no_produk)
    {
        if (!$this->AdminModel->detailpowderData($no_produk)) {
            abort(404);
        }
        $data = [
            'powder' => $this->AdminModel->detailpowderData($no_produk),
        ];
        return view('layouts.editpowder', $data);
    }

    public function editbrowpencil($no_produk)
    {
        if (!$this->AdminModel->detailbrowpencilData($no_produk)) {
            abort(404);
        }
        $data = [
            'browpencil' => $this->AdminModel->detailbrowpencilData($no_produk),
        ];
        return view('layouts.editbrowpencil', $data);
    }

    public function editfoundation($no_produk)
    {
        if (!$this->AdminModel->detailfoundationData($no_produk)) {
            abort(404);
        }
        $data = [
            'foundation' => $this->AdminModel->detailfoundationData($no_produk),
        ];
        return view('layouts.editfoundation', $data);
    }

    public function editmascara($no_produk)
    {
        if (!$this->AdminModel->detailmascaraData($no_produk)) {
            abort(404);
        }
        $data = [
            'mascara' => $this->AdminModel->detailmascaraData($no_produk),
        ];
        return view('layouts.editmascara', $data);
    }

    public function editliptint($no_produk)
    {
        if (!$this->AdminModel->detailliptintData($no_produk)) {
            abort(404);
        }
        $data = [
            'liptint' => $this->AdminModel->detailliptintData($no_produk),
        ];
        return view('layouts.editliptint', $data);
    }



    //Update Data From Admin
    public function updateblushon($no_produk)
    {
        Request()->validate([
            'id_produk' => 'required|min:6|max:6',
            'brand' => 'required',
            'nama_produk' => 'required',
            'keterangan' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png',
            'logo'=> 'required|mimes:png',
            'harga'=> 'required',
        ],[
            'id_produk.required' => 'wajib diisi !!',
            'id_produk.unique' => 'id_produk Sudah Ada !!',
            'id_produk.min' => 'Min 6 Karakter',
            'id_produk.max' => 'Max 6 Karakter'
        ]);

        //upload gambar
        $file = Request()-> image;
        $fileName = Request()->id_produk.'.'.$file->extension();
        $file->move(public_path('foto_produk'), $fileName);

        //upload logo
        $file1 = Request()->logo;
        $fileName1 = Request()->nama_produk.'.'.$file1->extension();
        $file1->move(public_path('foto_produk'), $fileName1);

        $data = [
            'id_produk' => Request()->id_produk,
            'brand' => Request()->brand,
            'nama_produk' => Request()->nama_produk,
            'image' => $fileName,
            'keterangan' => Request()->keterangan,
            'logo'=> $fileName1,
            'harga'=> Request()->harga,
        ];

        $this->AdminModel->editblushonData($no_produk, $data);
        return redirect()->route('v_listblushon');


    }

    public function updatepowder($no_produk)
    {
        Request()->validate([
            'id_produk' => 'required|min:6|max:6',
            'brand' => 'required',
            'nama_produk' => 'required',
            'keterangan' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png',
            'logo'=> 'required|mimes:png',
            'harga'=> 'required',
        ],[
            'id_produk.required' => 'wajib diisi !!',
            'id_produk.unique' => 'id_produk Sudah Ada !!',
            'id_produk.min' => 'Min 6 Karakter',
            'id_produk.max' => 'Max 6 Karakter'
        ]);

        //upload gambar
        $file = Request()-> image;
        $fileName = Request()->id_produk.'.'.$file->extension();
        $file->move(public_path('foto_produk'), $fileName);

        //upload logo
        $file1 = Request()->logo;
        $fileName1 = Request()->nama_produk.'.'.$file1->extension();
        $file1->move(public_path('foto_produk'), $fileName1);

        $data = [
            'id_produk' => Request()->id_produk,
            'brand' => Request()->brand,
            'nama_produk' => Request()->nama_produk,
            'image' => $fileName,
            'keterangan' => Request()->keterangan,
            'logo'=> $fileName1,
            'harga'=> Request()->harga,
        ];

        $this->AdminModel->editpowderData($no_produk, $data);
        return redirect()->route('v_listpowder');


    }

    public function updateliptint($no_produk)
    {
        Request()->validate([
            'id_produk' => 'required|min:6|max:6',
            'brand' => 'required',
            'nama_produk' => 'required',
            'keterangan' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png',
            'logo'=> 'required|mimes:png',
            'harga'=> 'required',
        ],[
            'id_produk.required' => 'wajib diisi !!',
            'id_produk.unique' => 'id_produk Sudah Ada !!',
            'id_produk.min' => 'Min 6 Karakter',
            'id_produk.max' => 'Max 6 Karakter'
        ]);

        //upload gambar
        $file = Request()-> image;
        $fileName = Request()->id_produk.'.'.$file->extension();
        $file->move(public_path('foto_produk'), $fileName);

        //upload logo
        $file1 = Request()->logo;
        $fileName1 = Request()->nama_produk.'.'.$file1->extension();
        $file1->move(public_path('foto_produk'), $fileName1);

        $data = [
            'id_produk' => Request()->id_produk,
            'brand' => Request()->brand,
            'nama_produk' => Request()->nama_produk,
            'image' => $fileName,
            'keterangan' => Request()->keterangan,
            'logo'=> $fileName1,
            'harga'=> Request()->harga,
        ];

        $this->AdminModel->editliptintData($no_produk, $data);
        return redirect()->route('v_listliptint');


    }

    public function updatebrowpencil($no_produk)
    {
        Request()->validate([
            'id_produk' => 'required|min:6|max:6',
            'brand' => 'required',
            'nama_produk' => 'required',
            'keterangan' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png',
            'logo'=> 'required|mimes:png',
            'harga'=> 'required',
        ],[
            'id_produk.required' => 'wajib diisi !!',
            'id_produk.unique' => 'id_produk Sudah Ada !!',
            'id_produk.min' => 'Min 6 Karakter',
            'id_produk.max' => 'Max 6 Karakter'
        ]);

        //upload gambar
        $file = Request()-> image;
        $fileName = Request()->id_produk.'.'.$file->extension();
        $file->move(public_path('foto_produk'), $fileName);

        //upload logo
        $file1 = Request()->logo;
        $fileName1 = Request()->nama_produk.'.'.$file1->extension();
        $file1->move(public_path('foto_produk'), $fileName1);

        $data = [
            'id_produk' => Request()->id_produk,
            'brand' => Request()->brand,
            'nama_produk' => Request()->nama_produk,
            'image' => $fileName,
            'keterangan' => Request()->keterangan,
            'logo'=> $fileName1,
            'harga'=> Request()->harga,
        ];

        $this->AdminModel->editbrowpencilData($no_produk, $data);
        return redirect()->route('v_listbrowpencil');


    }

    public function updatefoundation($no_produk)
    {
        Request()->validate([
            'id_produk' => 'required|min:6|max:6',
            'brand' => 'required',
            'nama_produk' => 'required',
            'keterangan' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png',
            'logo'=> 'required|mimes:png',
            'harga'=> 'required',
        ],[
            'id_produk.required' => 'wajib diisi !!',
            'id_produk.unique' => 'id_produk Sudah Ada !!',
            'id_produk.min' => 'Min 6 Karakter',
            'id_produk.max' => 'Max 6 Karakter'
        ]);

        //upload gambar
        $file = Request()-> image;
        $fileName = Request()->id_produk.'.'.$file->extension();
        $file->move(public_path('foto_produk'), $fileName);

        //upload logo
        $file1 = Request()->logo;
        $fileName1 = Request()->nama_produk.'.'.$file1->extension();
        $file1->move(public_path('foto_produk'), $fileName1);

        $data = [
            'id_produk' => Request()->id_produk,
            'brand' => Request()->brand,
            'nama_produk' => Request()->nama_produk,
            'image' => $fileName,
            'keterangan' => Request()->keterangan,
            'logo'=> $fileName1,
            'harga'=> Request()->harga,
        ];

        $this->AdminModel->editfoundationData($no_produk, $data);
        return redirect()->route('v_listfoundation');


    }

    public function updatemascara($no_produk)
    {
        Request()->validate([
            'id_produk' => 'required|min:6|max:6',
            'brand' => 'required',
            'nama_produk' => 'required',
            'keterangan' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png',
            'logo'=> 'required|mimes:png',
            'harga'=> 'required',
        ],[
            'id_produk.required' => 'wajib diisi !!',
            'id_produk.unique' => 'id_produk Sudah Ada !!',
            'id_produk.min' => 'Min 6 Karakter',
            'id_produk.max' => 'Max 6 Karakter'
        ]);

        //upload gambar
        $file = Request()-> image;
        $fileName = Request()->id_produk.'.'.$file->extension();
        $file->move(public_path('foto_produk'), $fileName);

        //upload logo
        $file1 = Request()->logo;
        $fileName1 = Request()->nama_produk.'.'.$file1->extension();
        $file1->move(public_path('foto_produk'), $fileName1);

        $data = [
            'id_produk' => Request()->id_produk,
            'brand' => Request()->brand,
            'nama_produk' => Request()->nama_produk,
            'image' => $fileName,
            'keterangan' => Request()->keterangan,
            'logo'=> $fileName1,
            'harga'=> Request()->harga,
        ];

        $this->AdminModel->editmascaraData($no_produk, $data);
        return redirect()->route('v_listmascara');


    }
}