<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AdminModel extends Model
{
    public function powderData()
    {
        return DB::table('tbl_powder')->get();
    }

    ///////////////////////////////////////////////////

    public function admascaraData()
    {
        return DB::table('review_mascara')->get();
    }

    public function adpowderData()
    {
        return DB::table('review_powder')->get();
    }

    public function adliptintData()
    {
        return DB::table('review_liptint')->get();
    }

    public function adblushonData()
    {
        return DB::table('review_blushon')->get();
    }

    public function adbrowpencilData()
    {
        return DB::table('review_browpencil')->get();
    }

    public function adfoundationData()
    {
        return DB::table('review_foundation')->get();
    }
    //////////////////////////////////////////////////

    public function reviewliptintData($no_produk)
    {
        return DB::table('review_liptint')->where('no_produk', $no_produk)->get();
    }

    public function reviewfoundationData($no_produk)
    {
        return DB::table('review_foundation')->where('no_produk', $no_produk)->get();
    }

    public function reviewblushonData($no_produk)
    {
        return DB::table('review_blushon')->where('no_produk', $no_produk)->get();
    }

    public function reviewmascaraData($no_produk)
    {
        return DB::table('review_mascara')->where('no_produk', $no_produk)->get();
    }

    public function reviewbrowpencilData($no_produk)
    {
        return DB::table('review_browpencil')->where('no_produk', $no_produk)->get();
    }

    public function reviewpowderData($no_produk)
    {
        return DB::table('review_powder')->where('no_produk', $no_produk)->get();
    }

    //////////////////////////////////////////

    public function mascaraData()
    {
        return DB::table('tbl_mascara')->get();
    }

    public function blushonData()
    {
        return DB::table('tbl_blushon')->get();
    }

    public function liptintData()
    {
        return DB::table('tbl_liptint')->get();
    }

    public function browpencilData()
    {
        return DB::table('tbl_browpencil')->get();
    }

    public function foundationData()
    {
        return DB::table('tbl_foundation')->get();
    }


    public function detailData($no_produk)
    {
        return DB::table('product')->where('no_produk', $no_produk)->first();
    }

    public function detailfoundationData($no_produk)
    {
        return DB::table('tbl_foundation')->where('no_produk', $no_produk)->first();
    }

    public function detailblushonData($no_produk)
    {
        return DB::table('tbl_blushon')->where('no_produk', $no_produk)->first();
    }


    public function detailliptintData($no_produk)
    {
        return DB::table('tbl_liptint')->where('no_produk', $no_produk)->first();
    }

    public function detailbrowpencilData($no_produk)
    {
        return DB::table('tbl_browpencil')->where('no_produk', $no_produk)->first();
    }

    public function detailpowderData($no_produk)
    {
        return DB::table('tbl_powder')->where('no_produk', $no_produk)->first();
    }

    public function detailmascaraData($no_produk)
    {
        return DB::table('tbl_mascara')->where('no_produk', $no_produk)->first();
    }

    //////////////////////////////////////////////////////////////////////////////////

    public function userpowderData($no_produk)
    {
        return DB::table('tbl_powder')->where('no_produk', $no_produk)->first();
    }

    public function usermascaraData($no_produk)
    {
        return DB::table('tbl_mascara')->where('no_produk', $no_produk)->first();
    }

    public function userfoundationData($no_produk)
    {
        return DB::table('tbl_foundation')->where('no_produk', $no_produk)->first();
    }

    public function userliptintData($no_produk)
    {
        return DB::table('tbl_liptint')->where('no_produk', $no_produk)->first();
    }

    public function userblushonData($no_produk)
    {
        return DB::table('tbl_blushon')->where('no_produk', $no_produk)->first();
    }

    public function userbrowpencilData($no_produk)
    {
        return DB::table('tbl_browpencil')->where('no_produk', $no_produk)->first();
    }


    //////////////////////////////////////////////////////////////////////////////////

    public function addData($data)
    {
        DB::table('product')->insert($data);
    }
    
    ///////////////////////////////////////////////////

    public function addreviewliptint($data)
    {
        DB::table('review_liptint')->insert($data);
    }

    public function addreviewmascara($data)
    {
        DB::table('review_mascara')->insert($data);
    }

    public function addreviewblushon($data)
    {
        DB::table('review_blushon')->insert($data);
    }

    public function addreviewfoundation($data)
    {
        DB::table('review_foundation')->insert($data);
    }

    public function addreviewbrowpencil($data)
    {
        DB::table('review_browpencil')->insert($data);
    }

    public function addreviewpowder($data)
    {
        DB::table('review_powder')->insert($data);
    }

    /////////////////////////////////////////////

    public function addpowderData($data)
    {
        DB::table('tbl_powder')->insert($data);
    }

    public function addmascaraData($data)
    {
        DB::table('tbl_mascara')->insert($data);
    }

    public function addfoundationData($data)
    {
        DB::table('tbl_foundation')->insert($data);
    }

    public function addblushonData($data)
    {
        DB::table('tbl_blushon')->insert($data);
    }

    public function addbrowpencilData($data)
    {
        DB::table('tbl_browpencil')->insert($data);
    }

    public function addliptintData($data)
    {
        DB::table('tbl_liptint')->insert($data);
    }


    //delete data
    public function deletelistbrowpencil($no_produk)
    {
        DB::table('tbl_browpencil')
        ->where('no_produk', $no_produk)
        ->delete();
    }

    public function deletelistpowder($no_produk)
    {
        DB::table('tbl_powder')
        ->where('no_produk', $no_produk)
        ->delete();
    }

    public function deletelistmascara($no_produk)
    {
        DB::table('tbl_mascara')
        ->where('no_produk', $no_produk)
        ->delete();
    }

    public function deletelistfoundation($no_produk)
    {
        DB::table('tbl_foundation')
        ->where('no_produk', $no_produk)
        ->delete();
    }

    public function deletelistblushon($no_produk)
    {
        DB::table('tbl_blushon')
        ->where('no_produk', $no_produk)
        ->delete();
    }

    public function deletelistliptint($no_produk)
    {
        DB::table('tbl_liptint')
        ->where('no_produk', $no_produk)
        ->delete();
    }


    //delete review
    public function deletereviewpowder($review)
    {
        DB::table('review_powder')
        ->where('review', $review)
        ->delete();
    }

    public function deletereviewmascara($review)
    {
        DB::table('review_mascara')
        ->where('review', $review)
        ->delete();
    }

    public function deletereviewblushon($review)
    {
        DB::table('review_blushon')
        ->where('review', $review)
        ->delete();
    }

    public function deletereviewbrowpencil($review)
    {
        DB::table('review_browpencil')
        ->where('review', $review)
        ->delete();
    }

    public function deletereviewliptint($review)
    {
        DB::table('review_liptint')
        ->where('review', $review)
        ->delete();
    }

    public function deletereviewfoundation($review)
    {
        DB::table('review_foundation')
        ->where('review', $review)
        ->delete();
    }


    //edit data
    public function editblushonData($no_produk, $data)
    {
        DB::table('tbl_blushon')
            ->where('no_produk', $no_produk)
            ->update($data);
    }

    public function editpowderData($no_produk, $data)
    {
        DB::table('tbl_powder')
            ->where('no_produk', $no_produk)
            ->update($data);
    }

    public function editmascaraData($no_produk, $data)
    {
        DB::table('tbl_mascara')
            ->where('no_produk', $no_produk)
            ->update($data);
    }

    public function editfoundationData($no_produk, $data)
    {
        DB::table('tbl_foundation')
            ->where('no_produk', $no_produk)
            ->update($data);
    }
    
    public function editbrowpencilData($no_produk, $data)
    {
        DB::table('tbl_browpencil')
            ->where('no_produk', $no_produk)
            ->update($data);
    }

    public function editliptintData($no_produk, $data)
    {
        DB::table('tbl_liptint')
            ->where('no_produk', $no_produk)
            ->update($data);
    }
    
}