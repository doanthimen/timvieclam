<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Nguoitimviec;
use App\Nhatuyendung;
use App\Nganhnghe;
use App\khuvuc;
use App\Tintuyendung;
use Hash;
use Auth;
use Session;
use Schema;
use Socialite;
use App\SocialProvider;

class PageController extends Controller
{
    public function getIndex(){
    	$tintuyendung = Tintuyendung::where('new',0)->paginate(3);
        $nganhnghe = Nganhnghe::all();
        $new_tintuyendung = Tintuyendung::where('new',1)->paginate(3);

    	return view('page.trangchu',compact('tintuyendung','new_tintuyendung','nganhnghe'));

    }
public function getSignin(){

        return view('page.dangki');
    }
      public function postSignin(Request $req){
        $this->validate($req,
        [
                'email'=>'required|email|unique:users,email',
                'password'=>'required|min:6|max:30', 
                'username'=>'required',
                'password_confirmation'=>'required|same:password'

        ],
        [
                'email.required'=>'Quên nhập email',  
                'email.unique'=>'Email bạn nhập đã được người khác dùng',  
                'password_confirmation.same'=>'Mật khẩu không Khớp!!!', 
                'password.min'=>'Mật khẩu phải ít nhất phải 6 kí tự', 
                'password.max'=>'Mật khẩu gì mà dài thế nhớ nổi không đó',
                

        ]);
        $user = new User();
        $user->name = $req->username;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->phone = $req->phone;

        $user->save();

        return redirect()->back()->with('dang ky', 'Đăng ký thành công');
    }
     public function getLogin(){

        return view('page.dangnhap');
    }
     public function postLogin(Request $req)
    {
        $this->validate($req,
            [
                'email'=>'required|email',
                'password'=>'required|min:6|max:30', 
                
           ],
           [
                'email.required'=>'Vui lòng nhập email', 
                'email.email'=>'email không đúng định dạng', 
                'password.required'=>'Không nhập mật khẩu sao đăng nhập đây?',
                'password_confirmation.required'=>'Nhập lại mật khẩu cho đỡ nhầm nhé', 
                'password.min'=>'Mật khẩu phải ít nhất 6 kí tự nhá', 
                'password.max'=>'Mật khẩu nhập gì dài vậy',

        ]);
        $credentials = array('email'=>$req->email,'password'=>$req->password);
        if(Auth::attempt($credentials)){
            $user = Auth::user();

            if($user->level==0)
                return redirect()->route('nguoidung');
            else if($user->level==2)
            return redirect()->route('admin');
        }
        else{
            return redirect()->back()->with(['flag'=>'danger','message'=> 'Đăng nhập không thành công']);
        }
 
    }
    public function getDangnhap(){
        return view('page.dangnhaptuyendung');
    }
 public function postDangnhap(Request $req)
    {
        $this->validate($req,
            [
                'email'=>'required|email',
                'password'=>'required|min:6|max:30', 
                
           ],
           [
                'email.required'=>'Vui lòng nhập email', 
                'email.email'=>'email không đúng định dạng', 
                'password.required'=>'Không nhập mật khẩu sao đăng nhập đây?',
                'password_confirmation.required'=>'Nhập lại mật khẩu cho đỡ nhầm nhé', 
                'password.min'=>'Mật khẩu phải ít nhất 6 kí tự', 
                'password.max'=>'Mật khẩu nhập gì dài vậy',

        ]);
        $credentials = array('email'=>$req->email,'password'=>$req->password);
        if(Auth::attempt($credentials)){
            $user = Auth::user();

            if($user->level==1)
                return redirect()->route('nhatuyendung');
            else if($user->level==2)
            return redirect()->route('admin');
        }
        else{
            return redirect()->back()->with(['flag'=>'danger','message'=> 'Đăng nhập không thành công']);
        }
 
    }

     public function getLogout(){

        Auth::logout();
        return redirect()->route('trang-chu');
    }
    public function getNguoidungdangnhap(){
        
        $thongtinhoso = Nguoitimviec::all();
        return view('page.nguoixinviec',compact('thongtinhoso'));
    }
     public function getThongtinnguoidung(){
        
        $taohoso = Nguoitimviec::all();
        return view('page.thongtinnguoidung',compact('taohoso'));  
        

    }
    public function postThongtinnguoidung(Request $req){ 
      
        $Nguoitimviec = new Nguoitimviec();
        
        $Nganhnghe = new Nganhnghe();
        $khuvuc = new khuvuc();
        $Nguoitimviec->hovaten = $req->name;
        $Nguoitimviec->ngaysinh = $req->date;
        $Nguoitimviec->email = $req->email;
        $Nguoitimviec->hinhanh = $req->img;
        $khuvuc->khuvuc = $req->khuvuc;
        $Nganhnghe->nganh = $req->nganhnghe;
        $Nguoitimviec->honnhan = $req->honnhan;
        $Nguoitimviec->kinhnghiem = $req->kinhnghiem;
        $Nguoitimviec->trinhdo = $req->trinhdo;
        $Nguoitimviec->gioithieubanthan = $req->noidung;
        $Nguoitimviec->hienthi = $req->hienthi;
        $Nguoitimviec->save();
        $Nganhnghe->save();
        $khuvuc->save();
                    
 
        return redirect()->back()->with('them', 'Tạo hồ sơ thành công ');

    }
    public function getTuyendung(){

        return view('page.nhatuyendung');
    }
      public function postTuyendung(Request $req){
        $this->validate($req,
        [
                'email'=>'required|email|unique:users,email',
                'password'=>'required|min:6|max:30', 
                'username'=>'required',
                'password_confirmation'=>'required|same:password'

        ],
        [
                'email.required'=>'Quên nhập email',  
                'email.unique'=>'Email bạn nhập đã được người khác dùng',  
                'password_confirmation.same'=>'Mật khẩu không Khớp!!!', 
                'password.min'=>'Mật khẩu phải ít nhất phải 6 kí tự', 
                'password.max'=>'Mật khẩu gì mà dài thế nhớ nổi không đó',
               

        ]);
        $user = new User();
        $user->name = $req->username;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->phone = $req->phone;
        

        $user->save();

        return redirect()->back()->with('ok', 'Đăng ký thành công nhà tuyển dụng');
    }

  
    public function getNhatuyendungdangnhap(){
        

        return view('page.nhatuyendungquanli');

    }
     public function getThongtinnhatuyendung(){
        

        return view('page.thongtinnhatuyendung');

    }
    public function postThongtinnhatuyendung(Request $req){ 
     
        $Nhatuyendung = new Nhatuyendung();
        $Nhatuyendung->ten = $req->name;
        $Nhatuyendung->email = $req->email;
        $Nhatuyendung->congty = $req->congty;
        $Nhatuyendung->hinhanh = $req->img;
        $Nhatuyendung->diachi = $req->diachi;
        $Nhatuyendung->tinhthanhpho = $req->tinhthanhpho;
        
       
        $Nhatuyendung->save();
        return redirect()->back()->with('them', 'Tạo thành công');

    }
    public function getAddtin(){
        

        return view('page.addtin');

    }
       public function postAddtin(Request $req){ 
     
        $Tintuyendung = new Tintuyendung();
        $Nganhnghe = new Nganhnghe();
        $khuvuc = new khuvuc();
        $Tintuyendung->tieude = $req->tieude;
        $Tintuyendung->congviectuyen = $req->congviectuyen;
        $Tintuyendung->macongviec = $req->macongviec;
        $Tintuyendung->motacongviec = $req->motacongviec;
        $Tintuyendung->yeucaucongviec = $req->yeucaucongviec;
        $Nganhnghe->nganh = $req->nganhnghe;
        $khuvuc->khuvuc = $req->khuvuc;
        $Tintuyendung->luongmin = $req->luongmin;
        $Tintuyendung->luongmax = $req->luongmax;
        $Tintuyendung->congkhai = $req->congkhai;
        $Tintuyendung->hinhthuc = $req->hinhthuc;
        $Tintuyendung->ngaybatdautuyendung = $req->ngaybatdautuyendung;
        $Tintuyendung->ngayketthuctuyendung = $req->ngayketthuctuyendung;
        $Tintuyendung->soluongtuyen = $req->soluongtuyen;
        $Tintuyendung->quyenloi = $req->quyenloi;
        $Tintuyendung->gioitinh = $req->gioitinh;
        $Tintuyendung->kinhnghiem = $req->kinhnghiem;
        $Tintuyendung->capbac = $req->capbac;
        $Tintuyendung->bangcap = $req->bangcap;
        $Tintuyendung->img = $req->img;
       
       
        $Tintuyendung->save();
        $Nganhnghe->save();
        $khuvuc->save();
        return redirect()->back()->with('them', 'Tạo tin thành công');

    }
    public function getChitiet(Request $req){
        $congviec = Tintuyendung::where('idTinTuyenDung',$req->idTin)->first();

        return view('page.chitietcongviec', compact('congviec'));
    }
     public function getvieclam(){

        return view('page.vieclam');
    }
    public function getXemthongtin(Request $req){

        
        $thongtin = Nguoitimviec::where('id',$req->idND)->first();
        $nganhnghe = nganhnghe::where('id',1)->paginate(3);
         $khuvuc = khuvuc::where('idKV',1)->paginate(3);
       
        return view('page.xemhosonguoidung', compact('thongtin','nganhnghe','khuvuc'));
    }
    public function getAdmin(){
        $user = user::where('name',0)->paginate(5);
        return view('back-end.admin',compact('user'));
    }

     public function getMen(){
        
        return view('page.men');
    }
 }
