

-----------------------------------------------------------------------------------------------------------------------------------
---------------------------------------------------------TẠO DATABASE--------------------------------------------------------------
-----------------------------------------------------------------------------------------------------------------------------------
create database Quan_Ly_Cua_Hang
go
use Quan_Ly_Cua_Hang
go 


-----------------------------------------------------------------------------------------------------------------------------------
------------------------------------------------------------TẠO BẢNG---------------------------------------------------------------
-----------------------------------------------------------------------------------------------------------------------------------

--1.Tạo bảng tài khoản
create table taikhoan
(
tentk varchar(30) not null primary key,
matkhau varchar(30),
quyen nvarchar(30) check (quyen = 'nhanvien' or quyen = 'admin'),
id char(10)
)

 --2.Tạo bảng nhân viên
 create table nhanvien 
 (
 idnhanvien char(10) not null primary key,
 hoten nvarchar(30),
 ngaysinh date,
 gioitinh nvarchar(5),
 ngaybatdaulam date,
 diachi nvarchar(30),
 email varchar(30),
 sodienthoai varchar(20),
 luong float
 )
 go

 --3.Tạo bảng loại hàng
create table loaihang
(
	idloaihang char(10) not null primary key,
	tenloaihang nvarchar(30),
	mota nvarchar(30)
)
go


--4.Tạo bảng Nhà Cung Cấp
create table nhacungcap
(
	idnhacungcap char(10)not null primary key,
	tencongty  nvarchar(30),
	diachi nvarchar(30),
	sodienthoai varchar(20),
	website varchar(200),
	congiaodich nvarchar(10)
)
go

--5.Tạo bảng Công ty Giao Hàng
create table ctygiaohang
(
	idcty char(10)not null primary key,
	tencongty  nvarchar(30),
	sodienthoai varchar(20),
	diachi nvarchar(30),
)
go

--6.Tạo bảng  Khách Hàng
create table khachhang
(
	idkhachhang char(10)not null primary key,
	hoten  nvarchar(30),
	gioitinh  nvarchar(5),
	diachi nvarchar(30),
	email nvarchar(30),
	sodienthoai varchar(20)
)
go


--7.Tạo bảng Đơn Hàng
create table donhang
(
	iddonhang char(10)not null primary key,
	idkhachhang char(10),
	foreign key (idkhachhang) references khachhang (idkhachhang),
	idnhanvien char(10),
	foreign key (idnhanvien) references nhanvien (idnhanvien),
	ngaydathang date,
	ngaygiaohang date,
	ngayyeucauchuyen date,
	idcty char(10), 
	foreign key (idcty) references ctygiaohang (idcty),
	diachigiaohang nvarchar(30)
)
go

--8.Tạo bảng Sản Phẩm
create table sanpham
(
	 idsanpham char(10)not null primary key,
	 tensp nvarchar(30),
	 idnhacungcap char(10)not null,
	 foreign key (idnhacungcap) references nhacungcap (idnhacungcap),
	 idloaihang char(10)not null,
	 foreign key (idloaihang) references loaihang (idloaihang),
	 dongianhap float,
	 soluongcon int,
	 soluongchocungcap int,
	 mota nvarchar(30),
	 ngungban nvarchar(10),
)

go

--9.Tạo bảng sp_Đơn hàng
create table sp_donhang
(
	iddonhang char(10)not null ,
	foreign key (iddonhang) references donhang (iddonhang),
	idsanpham char(10)not null,
	foreign key (idsanpham) references sanpham (idsanpham),
	idkhachhang char(10) not null,
	foreign key (idkhachhang) references khachhang(idkhachhang),
	primary key (iddonhang, idsanpham, idkhachhang),
	soluong int,
	dongiaban float,
	tylegiamgia float
)
go

--------------------------------------------------------------------------------------------------------------------------------------------
-----------------------------------------------------------------THỦ TỤC--------------------------------------------------------------------
 -------------------------------------------------------------------------------------------------------------------------------------------
--1. Thủ tục taikhoan
-- thủ tục thêm tài khoản
 create proc insert_taikhoan
 @tentk varchar(30) , @matkhau varchar(30), @quyen nvarchar(30),@id char(10)
 as
 begin
	insert into taikhoan(tentk,matkhau,quyen,id) values (@tentk,@matkhau,@quyen,@id)
 end
 go

 -- thủ tục xóa tài khoản
create proc delete_taikhoan
@id char(10)
as
begin 
	delete taikhoan where taikhoan.id = @id;
end
go


 -------------------------------------
 -------------------------------------
 --2.Thủ tục về bảng nhân viên
 --c1: Tạo thủ tục load nhân viên 
create proc load_nhanvien
as
begin
 select* from nhanvien
end
go

--Tạo thủ tục chèn nhân viên
create procedure insert_nhanvien
@idnhanvien char(10),@hoten nvarchar(30),@ngaysinh date, @gioitinh nvarchar(5),@ngaybatdaulam date,@diachi nvarchar(30),@email varchar(30),@sodienthoai varchar(20), @luong float
as
begin
 insert into nhanvien(idnhanvien, hoten, ngaysinh, gioitinh, ngaybatdaulam, diachi, email, sodienthoai, luong) VALUES(@idnhanvien, @hoten, @ngaysinh, @gioitinh, @ngaybatdaulam, @diachi, @email, @sodienthoai,@Luong)
end
go



--Tạo thủ tục cập nhật nhân viên
create procedure update_nhanvien
@idnhanvien char(10),@hoten nvarchar(30),@ngaysinh date, @gioitinh nvarchar(5),@ngaybatdaulam date,@diachi nvarchar(30),@email varchar(30),@sodienthoai varchar(20), @luong float
as
begin
update nhanvien set hoten=@hoten, ngaysinh=@ngaysinh, gioitinh=@gioitinh, ngaybatdaulam=@ngaybatdaulam, diachi=@diachi, email=@email, sodienthoai=@sodienthoai, luong=@Luong where idnhanvien=@idnhanvien
end
go


--Tạo thủ tục xóa nhân viên
create procedure delete_nhanvien
@idnhanvien char(10)
as
begin
 delete from nhanvien where idnhanvien=@idnhanvien
end
go


---------------------------------------
---------------------------------------
--3.Thủ tục về bảng loại hàng
--c1: tạo thủ tục load loại hàng
create proc load_loaihang
as
begin
 select* from loaihang
end
go


--Tạo thủ tục chèn loại hàng
create procedure insert_loaihang
@idloaihang char(10), @tenloaihang nvarchar(30), @mota nvarchar(30)
as
begin
 insert into loaihang(idloaihang, tenloaihang, mota) VALUES(@idloaihang, @tenloaihang, @mota)
end
go

--Tạo thủ tục cập nhật loại hàng
create procedure update_loaihang
@idloaihang char(10),@tenloaihang nvarchar(30), @mota nvarchar(30) 
as
begin
update loaihang set  tenloaihang=@tenloaihang, mota=@mota where idloaihang=@idloaihang
end
go

--Tạo thủ tục xóa loại hàng
create procedure delete_loaihang
@idloaihang char(10)
as
begin
 delete from loaihang where idloaihang=@idloaihang
end
go



---------------------------------------
---------------------------------------
--4.Thủ tục về bảng nhà cung cấp
--tạo thủ tục load nhà cung cấp
create proc load_nhacungcap
as
begin
 select* from nhacungcap
end
go

--Tạo thủ tục chèn nhà cung cấp
create procedure insert_nhacungcap
@idnhacungcap char(10), @tencongty nvarchar(30), @diachi nvarchar(30), @sodienthoai varchar(20), @website varchar(200), @congiaodich nvarchar(10)
as
begin
 insert into nhacungcap(idnhacungcap, tencongty, diachi, sodienthoai, website, congiaodich) VALUES(@idnhacungcap, @tencongty, @diachi, @sodienthoai, @website, @congiaodich)
end
go

--Tạo thủ tục cập nhật nhà cung cấp
create procedure update_nhacungcap
@idnhacungcap char(10), @tencongty nvarchar(30), @diachi nvarchar(30), @sodienthoai varchar(20), @website varchar(200), @congiaodich nvarchar(10)
as
begin
update nhacungcap set  tencongty=@tencongty, diachi=@diachi, sodienthoai=@sodienthoai, website=@website, congiaodich=@congiaodich where idnhacungcap=@idnhacungcap
end
go

--Tạo thủ tục xóa nhà cung cấp
create procedure delete_nhacungcap
@idnhacungcap char(10)
as
begin
 delete from nhacungcap where idnhacungcap=@idnhacungcap
end
go


---------------------------------------
---------------------------------------
--5.Thủ tục về bảng công ty giao hàng
--tạo thủ tục load công ty giao hàng
create proc load_ctygiaohang
as
begin
 select* from ctygiaohang
end
go

--Tạo thủ tục chèn công ty giao hàng
create procedure insert_ctygiaohang
@idcty char(10), @tencongty nvarchar(30), @sodienthoai varchar(20), @diachi nvarchar(30)
as
begin
 insert into ctygiaohang(idcty, tencongty, sodienthoai, diachi) VALUES(@idcty, @tencongty, @sodienthoai, @diachi)
end
go

--Tạo thủ tục cập nhật công ty giao hàng
create procedure update_ctygiaohang
@idcty char(10), @tencongty nvarchar(30), @sodienthoai varchar(20), @diachi nvarchar(30)
as
begin
update ctygiaohang set  tencongty=@tencongty, sodienthoai=@sodienthoai, diachi=@diachi where idcty=@idcty
end
go


--Tạo thủ tục xóa công ty giao hàng
create procedure delete_ctygiaohang
@idcty char(10)
as
begin
 delete from ctygiaohang where idcty=@idcty
end
go

---------------------------------------
---------------------------------------
--6.Thủ tục về bảng sản phẩm
--tạo thủ tục load sản phẩm
create proc load_sanpham
as
begin
 select* from sanpham
end
go

--Tạo thủ tục chèn sản phẩm

create procedure insert_sanpham
@idsanpham char(10), @tensp nvarchar(30), @idnhacungcap char(10), @idloaihang char(10), @dongianhap float, @soluongcon int, @soluongchocungcap int, @mota nvarchar(30), @ngungban nvarchar(10) 
as
begin
 insert into sanpham(idsanpham, tensp, idnhacungcap, idloaihang, dongianhap,soluongcon, soluongchocungcap, mota, ngungban ) VALUES(@idsanpham, @tensp, @idnhacungcap, @idloaihang, @dongianhap, @soluongcon, @soluongchocungcap, @mota ,@ngungban )
end
go
insert_sanpham 
--Tạo thủ tục cập nhật sản phẩm
create procedure update_sanpham
@idsanpham char(10), @tensp nvarchar(50), @idnhacungcap char(10), @idloaihang char(10), @dongianhap float, @soluongcon int, @soluongchocungcap int, @mota nvarchar(30), @ngungban nvarchar(10) 
as
begin
update sanpham set tensp=@tensp, idnhacungcap=@idnhacungcap, idloaihang=@idloaihang ,dongianhap=@dongianhap, soluongcon=@soluongcon, soluongchocungcap= @soluongchocungcap, mota=@mota, ngungban=@ngungban where idsanpham=@idsanpham
end
go


--Tạo thủ tục xóa sản phẩm
create procedure delete_sanpham
@idsanpham char(10)
as
begin
 delete from sanpham where idsanpham=@idsanpham
end
go



---------------------------------------
---------------------------------------
--7.Thủ tục về bảng khách hàng
--tạo thủ tục load khách hàng
create proc load_khachhang
as
begin
 select* from khachhang
end
go

--Tạo thủ tục chèn khách hàng

create procedure insert_khachhang
@idkhachhang char(10), @hoten nvarchar(30), @gioitinh nvarchar(5), @diachi nvarchar(30), @email nvarchar(30), @sodienthoai char(20)
as
begin
 insert into khachhang(idkhachhang, hoten, gioitinh, diachi, email, sodienthoai) VALUES(@idkhachhang, @hoten, @gioitinh, @diachi, @email, @sodienthoai)
end
go

--Tạo thủ tục cập nhật khách hàng
create procedure update_khachhang
@idkhachhang char(10), @hoten nvarchar(30), @gioitinh nvarchar(5), @diachi nvarchar(30), @email nvarchar(30), @sodienthoai char(20)
as
begin
update khachhang set hoten=@hoten, gioitinh=@gioitinh, diachi=@diachi, email=@email, sodienthoai=@sodienthoai  where idkhachhang=@idkhachhang
end
go

--Tạo thủ tục xóa khách hàng
create procedure delete_khachhang
@idkhachhang char(10)
as
begin
 delete from khachhang where idkhachhang=@idkhachhang
end
go


---------------------------------------
---------------------------------------
--8.Thủ tục về bảng đơn hàng
--tạo thủ tục load đơn hàng
create proc load_donhang
as
begin
 select* from donhang
end
go

--Tạo thủ tục chèn đơn hàng
create procedure insert_donhang
@iddonhang char(10),@idkhachhang char(10),@idnhanvien char(10), @ngaydathang date, @ngaygiaohang date, @ngayyeucauchuyen date, @idcty char(10), @diachigiaohang nvarchar(30)
as
begin
 insert into donhang(iddonhang, idkhachhang, idnhanvien, ngaydathang, ngaygiaohang, ngayyeucauchuyen, idcty, diachigiaohang) VALUES(@iddonhang, @idkhachhang, @idnhanvien, @ngaydathang, @ngaygiaohang, @ngayyeucauchuyen, @idcty, @diachigiaohang )
end
go

--Tạo thủ tục cập nhật đơn hàng
create procedure update_donhang
@iddonhang char(10),@idkhachhang char(10),@idnhanvien char(10), @ngaydathang date, @ngaygiaohang date, @ngayyeucauchuyen date, @idcty char(10), @diachigiaohang nvarchar(30)
as
begin
update donhang set idkhachhang=@idkhachhang, idnhanvien=@idnhanvien, ngaydathang=@ngaydathang, ngaygiaohang=@ngaygiaohang ,ngayyeucauchuyen=@ngayyeucauchuyen, idcty=@idcty  where iddonhang=@iddonhang
end
go

--Tạo thủ tục xóa đơn hàng
create procedure delete_donhang
@iddonhang char(10)
as
begin
 delete from donhang where iddonhang=@iddonhang
end
go
---------------------------------------
---------------------------------------
--9.Thủ tục về bảng sp_donhang
--tạo thủ tục load sp_donhang
create proc load_sp_donhang
as
begin
 select* from sp_donhang
end
go

--Tạo thủ tục chèn sp_donhang
create procedure insert_sp_donhang
@iddonhang char(10), @idsanpham char(10), @idkhachhang char(10), @soluong int, @dongiaban float, @tylegiamgia float
as
begin
 insert into sp_donhang(iddonhang, idsanpham, idkhachhang, soluong, dongiaban, tylegiamgia) VALUES(@iddonhang, @idsanpham, @idkhachhang, @soluong, @dongiaban, @tylegiamgia)
end
go


--Tạo thủ tục cập nhật sp_donhang
create procedure update_sp_donhang
@iddonhang char(10), @idsanpham char(10), @idkhachhang char(10), @soluong int, @dongiaban float, @tylegiamgia float
as
begin
update sp_donhang set soluong=@soluong, dongiaban=@dongiaban, tylegiamgia=@tylegiamgia where iddonhang=@iddonhang and idsanpham=@idsanpham and idkhachhang = @idkhachhang
end
go

--Tạo thủ tục xóa loại hàng
create procedure delete_sp_donhang 
@iddonhang char(10), @idsanpham char(10), @idkhachhang char(10)
as
begin
 delete from sp_donhang where iddonhang=@iddonhang and idsanpham=@idsanpham and idkhachhang=@idkhachhang
end
go

----------------------------------
----------------------------------
--Thủ tục để xóa khách hàng mà không cập xóa từ bảng nhỏ nhất(sp_donhang)
--thủ tục xóa đơn hàng mà không cần xóa sp_donhang
create procedure delete_sp_donhang1 
@iddonhang char(10)
as
begin
 delete from sp_donhang where iddonhang=@iddonhang 
end
go

--thủ tục xóa khách hàng mà ko cần đi xóa cái nhỏ hơn nó là đơn hàng và sp_đơnhang
create proc delete_sp_donhang_idkhachhang
@idkhachhang char(10)
as
begin
	delete from sp_donhang where idkhachhang=@idkhachhang
end

--thủ tục xóa ở bảng đơn hàng
create proc delete_donhang_idkhachhang
@idkhachhang char(10)
as
begin
	delete from donhang where idkhachhang=@idkhachhang
end

---------------------------------------------------------------------------------------------------------------------------------------------
-----------------------------------------------------------------VIEW------------------------------------------------------------------------
---------------------------------------------------------------------------------------------------------------------------------------------
 --VIEW của mục sản phẩm
--tạo view id nhà cung cấp
create view view_load_idncc
as
select idnhacungcap
from nhacungcap
go


--tạo view id loại hàng
create view view_load_idlh
as
select idloaihang
from loaihang
go

------------------------------------
------------------------------------
--view của mục đơn hàng
--tạo view id khách hàng
create view view_load_idkhachang
as
select idkhachhang
from khachhang
go

--tạo view id nhân viên
create view view_load_idnhanvien
as
select idnhanvien
from nhanvien
go

--tạo view id cty giao hàng
create view view_load_idctygiaohang
as
select idcty
from ctygiaohang
go

-----------------------------------
-----------------------------------
--tạo view cho mục sp_đơn hàng
--tạo view cho id đơn hàng
create view view_iddonhang
as
select iddonhang
from donhang 
go

--tạo view cho id sản phẩm 
create view view_idsanpham
as
select idsanpham
from sanpham
go

--tạo view cho id khách hàng
create view view_idkhachhang
as
select idkhachhang
from khachhang
go

--------------------------------------------------------------------------------------------------------------------------------------------
-------------------------------------------------------------------HÀM----------------------------------------------------------------------
--------------------------------------------------------------------------------------------------------------------------------------------
--2: tạo hàm load nhân viên 
create function load_nhanvien_fc()
	RETURNS table
	as
		return (select * from nhanvien)
	go


--3: tạo hàm load loại hàng
create function load_loaihang_fc()
	returns table
	as
		return (select * from loaihang)
	go

--tạo hàm nhà cung cấp
create function load_nhacungcap_fc()
	returns table
	as
		return(select* from nhacungcap)
	go


---------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------TRIGGER------------------------------------------------------------------------
---------------------------------------------------------------------------------------------------------------------------------------------
--Tạo Trigger để đảm bảo rằng khi thêm một loại mặt hàng vào bảng LoaiHang
--thì tên loại mặt hàng thêm vào phải chưa có trong bảng. 
--Nếu người dùng nhập một tên loại mặt hàng đã có trong danh sách thì báo lỗi.

create trigger them_loai_hang
on loaihang
for insert
as
begin
	declare @bien int
	set @bien = (select count (*) from loaihang, inserted where loaihang.tenloaihang = inserted.tenloaihang)
	if(@bien > 1)
		begin
			print N'Loại hàng đã có trong bảng, mời bạn nhập mặt hàng khác!!!'
			rollback tran
		end
	else 
		begin 
			print N'Thêm thành công'
		end
end
go



----------------------------------------------
----------------------------------------------
--Tạo Trigger để đảm bảo rằng khi sửa một loại mặt hàng trong bảng LoaiHang
--thì tên loại mặt hàng sau khi sửa phải khác tên loai mặt hàng trước khi sửa và tên loại
--mặt hàng sau khi sửa không trùng với tên các loại hàng đã có trong bảng. Nếu vi phạm
--thì thông báo lỗi


create trigger loaihang_update
on loaihang
after insert 
as
begin
	declare @dem int
	update loaihang
	set @dem = (select count (*) from loaihang, inserted where loaihang.tenloaihang = inserted.tenloaihang)
	if(@dem > 1)
		begin
			print N'Tên của loại hàng chưa được thay đổi, mời nhập lại!!!'
			rollback tran
		end
	else 
		begin
			print N'Tên loại hàng đã được cập nhật thành công'
		end
end
go

------------------------------------------------------------------------------------------------------------
--------------------------------------------Phân quyền và bảo mật-------------------------------------------
------------------------------------------------------------------------------------------------------------
-----------admin-------------
--tạo tài khoản login sqlsever
sp_addlogin 'admin','12345678'

--tạo user có quyền truy cập vào csdl qlch
use Quan_Ly_Cua_Hang
exec sp_grantdbaccess 'admin','admin'

--thêm role QL 
sp_addrole'QL'

--thêm user vào role
sp_addrolemember 'QL','admin'

--gán quyền truy cập
grant select, insert, delete, update on nhacungcap to QL
grant select, insert, delete, update on ctygiaohang to QL
grant select, insert, delete, update on sanpham to QL
grant select, insert, delete, update on donhang to QL
grant select, insert, delete, update on khachhang to QL
grant select, insert, delete, update on sp_donhang to QL
grant select, insert, delete, update on nhanvien to QL
grant select, insert, delete, update on loaihang to QL

------------------------------------------
------------------------------------------
------------quyền nhân viên---------------
--tạo tài khoản login sqlsever
sp_addlogin 'hoanganh','hoanganh'

--tạo user có quyền truy cập vào csdl qlch
use Quan_Ly_Cua_Hang
exec sp_grantdbaccess 'hoanganh','nhanvien'

--thêm role NV
sp_addrole'NV'

--thêm nhân viên vào role
sp_addrolemember 'NV','nhanvien'

--gán quyền truy cập
grant select, insert, delete, update on donhang to NV
grant select, insert, delete, update on khachhang to NV
grant select, insert, delete, update on sp_donhang to NV










