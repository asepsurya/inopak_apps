<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ikm;
use App\Models\DokumentasiCots;
use App\Models\BencmarkProduk;
use App\Models\ProdukDesign;
use App\Models\cots;
use App\Models\Project;
use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;
use Illuminate\Support\Facades\Storage;

class DetileIkmController extends Controller
{
 
    public function index($id_ikm, $id_project){
        // unkripsi id ikm
        $id_ikm =decrypt($id_ikm);
        return view('pages.ikm.detile',[
            'title'=>'Detile IKM',
            'project'=>Project::Firstwhere('id',$id_project),
            'ikm'=>ikm::with(['province','district','village','regency','bencmark'])->where('id',$id_ikm)->get(),
            'dokumentasicots'=>DokumentasiCots::where('id_ikm',$id_ikm)->get(),
            'dokumentasicotscek'=>DokumentasiCots::where('id_ikm',$id_ikm)->count(),
            'cots'=>cots::where('id_ikm',$id_ikm)->count(),
            'cotsview'=>cots::where('id_ikm',$id_ikm)->get(),
        ]);
    }
    public function ubahFotoIkm(request $request){

        // return $request->file('gambar')->store('ikms-img-Profile');
        
        $validasiGambar = $request->validate([
            'gambar'=>'image|file',
        ]);
        if($request->file('gambar')){
            //gambar dibah maka gambar di storage di hapus
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            // post-images adalah directory penyimpanan Gambar
            $validasiGambar['gambar']=$request->file('gambar')->store('ikms-img-Profile');
        }

        ikm::where('id',$request->id_ikm)->update($validasiGambar);
        $request->session()->flash('UpdateBerhasil', 'Photo Berhasil Diubah');
        return redirect('/project/dataikm/'.$request->id_projek);
    }
    public function bencmark(request $request){
        $validasiGambar = $request->validate([
            'id_ikm'=>'',
            'gambar'=>'image|file',
            'id_Project'=>'',
           
        ]);
        if($request->file('gambar')){
            //gambar dibah maka gambar di storage di hapus
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            // post-images adalah directory penyimpanan Gambar
            $validasiGambar['gambar']=$request->file('gambar')->store('Bencmark-design');
        }

        BencmarkProduk::create($validasiGambar);
        $request->session()->flash('Berhasil', 'Benckmark Berhasil Ditambahkan');
        return redirect()->back();
    }

    public function cots(request $request){
        $validasi = $request->validate([
            'id_ikm'=>'required|unique:cots',
            'id_project'=>'required',
            'sejarahSingkat'=>'required',
            'produkjual'=>'required',
            'carapemasaran'=>'required',
            'bahanbaku'=>'required',
            'prosesproduksi'=>'required',
            'omset'=>'required',
            'kapasitasProduksi'=>'required',
            'kendala'=>'required',
            'solusi'=>'required',
        ]);
        cots::create($validasi);
        $request->session()->flash('Berhasil', 'Data Berhasil ditambahkan');
        return redirect()->route('detail',[
            'id_ikm'=>encrypt($request->id_ikm),
            'id_project'=>$request->id_project
        ]);
    }
    public function Updatecots(request $request){
      
        $validasi = $request->validate([
            'id_ikm'=>'',
            'id_project'=>'',
            'sejarahSingkat'=>'',
            'produkjual'=>'',
            'carapemasaran'=>'',
            'bahanbaku'=>'',
            'prosesproduksi'=>'',
            'omset'=>'',
            'kapasitasProduksi'=>'',
            'kendala'=>'',
            'solusi'=>'',
        ]);
        cots::where('id_ikm',$request->id_ikm)->update($validasi);
        $request->session()->flash('UpdateBerhasil', 'Data Berhasil Diubah');
        return redirect()->route('detail',[
            'id_ikm'=>encrypt($request->id_ikm),
            'id_project'=>$request->id_project
        ]);
    }
    // input image Multiple
    public function dokumentasi(request $request){
        $validasi = $request->validate([
            'id_ikm'=>'',
            'id_project'=>'',
            'gambar'=>''
          ]);
        $images=[];
        foreach($request->file('gambar') as $image){
            $fileName = uniqid() . '.' . $image->getClientOriginalExtension();
            $image_path =  $image->storeAs('images', $fileName,'public');

            array_push($images, $image_path);
          
        }
       $validasi['gambar'] = $images;
       DokumentasiCots::create($validasi);
       $request->session()->flash('Berhasil', 'Data Berhasil ditambahkan');
        return redirect()->back();

    }

   public function deleteDoc(request $request){
     $images = DokumentasiCots::all();
     $id_ikm = $request->id_ikm;
     $id_gambar=$request->id_gambar;
     $old_gambar=$request->old_gambar;
     
    //  hapus di storage
    if($old_gambar){
        Storage::delete($old_gambar);
    }
     DokumentasiCots::where('gambar',$old_gambar)->orWhere('id',$id_gambar)->delete();
     return redirect()->back();
     $request->session()->flash('HapusBerhasil', 'Data Berhasil DiHapus');
    
   }
   public function bencmarkDelete(Request $request, $id_gambar){
    $old_gambar = $request->oldImage;
    if($old_gambar){
        Storage::delete($old_gambar);
    }
     BencmarkProduk::where('id',$id_gambar)->delete();
     $request->session()->flash('HapusBerhasil', 'Data Berhasil diHapus');
     return redirect()->back();
   }

   public function tambahDesain(Request $request, $id){
    $validasiGambar = $request->validate([
        'id_ikm'=>'',
        'id_project'=>'',
        'gambar'=>'file|image'
    ]);
   
    $validasiGambar['gambar']=$request->file('gambar')->store('Produk-design');
    ProdukDesign::create($validasiGambar);
    $request->session()->flash('Berhasil', 'Data Berhasil disimpan');
    return redirect()->back();
   }
   public function deleteDesain(request $request , $id){
    $old_gambar = $request->oldImage;
    if($old_gambar){
        Storage::delete($old_gambar);
    }
    ProdukDesign::where('id',$id)->delete();
    $request->session()->flash('HapusBerhasil', 'Data Berhasil diHapus');
    return redirect()->back();
   }
}
