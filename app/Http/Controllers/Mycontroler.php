<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\login;
use App\nhanvien;
use App\thucdon;
use App\ban;
use App\chitiethoadon;

class Mycontroler extends Controller
{
// KIEM TRA DANG NHAP
	public function kiemtradangnhap(Request $request){
		if($request->has('username') && $request->has('password')){
		$username=$request->username;
		$password=$request->password;
		$table=login::where([['username','=',$username],['password','=',$password]])->get();
		if($table){
			echo "thanh cong";
		}
	}
	}
 // DELETE NHAN VIEN
 	public function deletenhanvien(Request $request){
 		if($request->has("idnhanvien")){
 			$idnhanvien=$request->idnhanvien;
 			$table=nhanvien::where("idnhanvien",'=',$idnhanvien)->delete();
 			if($table){
 				echo "thanhcong";
 			}
 		}
 	}  
// DELETE THUC DON
 	public function deletethucdon(Request $request){
 		if($request->has("idthucdon")){
 			$idthucdon=$request->idthucdon;
 			$table=thucdon::where("idthucdon",'=',$idthucdon)->delete();
 			if($table){
 				echo "thanhcong";
 			}
 		}
 	}  
 // GETDATA BAN
 	public function getdataban(){
 		$table=ban::all();
 		echo json_encode($table);
 	}
 // GETDATA NHAN VIEN
 	public function getdatanhanvien(){
 		$table=nhanvien::all();
 		echo json_encode($table);
 	}
  // GETDATA THUC DON
 	public function getdatathucdon(){
 		$table=thucdon::all();
 		echo json_encode($table);
 	}
 // INSERT DATA NHANVIEN
 	public function insertdatanhanvien(Request $request){
 		$manhanvien=$request->manhanvien;
 		$tennhanvien=$request->tennhanvien;
 		$sodienthoai=$request->sodienthoai;
 		$email=$request->email;
 		$diachi=$request->diachi;
 		$chungminhthu=$request->chungminhthu;
 		$songaylam=31;
 		$hinhanhnhanvien="https://tutkuevlilik.com/wp-content/uploads/2017/10/17-512.png";
 		$chucvu=$request->chucvu;

 		$table=new nhanvien();
 		$table->manhanvien=$manhanvien;
 		$table->tennhanvien=$tennhanvien;
 		$table->sodienthoai=$sodienthoai;
 		$table->hinhanhnhanvien=$hinhanhnhanvien;
 		$table->email=$email;
 		$table->diachi=$diachi;
 		$table->chungminhthu=$chungminhthu;
 		$table->songaylam=$songaylam;
 		$table->chucvu=$chucvu;
 		$table->save();
 		if($table){
 			echo "thanhcong";
 		}
		
 	}
 //INSERT CHITIET HOA DON
 	public function insert(Request $request){
 		$tenban=$request->tenban;
 		$thucdon=$request->thucdon;
 		$tongtien=$request->tongtien;
		$table=new chitiethoadon();
		$table->tenban=$tenban;
		$table->thucdon=$thucdon;
		$table->tongtien=$tongtien;
		$table->save();
		if($table){
			echo "thanhcong";
		}
 	}
 //INSERT thuc don
 	public function insertthucdon(Request $request){
 		$tenthucdon=$request->tenthucdon;
 		$hinhanhthucdon=$request->hinhanhthucdon;
 		$gia=$request->gia;

 		$hinhanhtam=$request->hinhanhtam;
 		$tentam=$request->tentam;
 	 	$thumuc="img/$tentam.jpg";

 		$data=file_put_contents($thumuc, base64_decode($hinhanhtam));

		$table=new thucdon();
		$table->tenthucdon=$tenthucdon;
		$table->hinhanhthucdon=$hinhanhthucdon;
		$table->gia=$gia;
		$table->save();
		if($table){
			echo "thanhcong";
		}
 	}
//UPDATE NGAY LAM
 	public function updatengaylam(Request $request){
 		$songaylam=$request->songaylam;
 		$idnhanvien=$request->idnhanvien;
 		$table=nhanvien::where('idnhanvien','=',$idnhanvien)->update(['songaylam'=>$songaylam]);
 		if($table){
 			echo "thanhcong";
 		}

 	}
 //UPDATE NHAN VIEN
 	public function updatenhanvien(Request $request){
 		$tennhanvien=$request->tennhanvien;
 		$sodienthoai=$request->sodienthoai;
 		$email=$request->email;
 		$diachi=$request->diachi;
 		$chungminhthu=$request->chungminhthu;
 		$chucvu=$request->chucvu;
 		$idnhanvien=$request->idnhanvien;

 		$table=new nhanvien();
 		$table->tennhanvien=$tennhanvien;
 		$table->sodienthoai=$sodienthoai;
 		$table->email=$email;
 		$table->diachi=$diachi;
 		$table->chungminhthu=$chungminhthu;
 		$table->chucvu=$chucvu;
 		$table->idnhanvien=$idnhanvien;
 		$table->save();
 		if($table){
 			echo "thanhcong";
 		}
 	}
}
