using System;
using System.Collections.Generic;
using System.Data;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using DTO_QuanLy;

namespace DAL_QuanLy
{
    public class DAL_NhanVien
    {
        DAL_KetNoi ketnoi = new DAL_KetNoi();
        
        //dùng thủ tục
        public DataTable load_nhanvien()
        {
            string sql = "load_nhanvien";
            return ketnoi.Load_Data(sql);
        }
        //dùng hàm
        public DataTable load_nhanvien_fc()
        {
            string sql = "select * from dbo.load_nhanvien_fc()";
            return ketnoi.Load_DataNotProcedure(sql);
        }

        public int insert_nhanvien(DTO_NhanVien nhanvien_public)
        {
            int parameter = 9;
            string[] name = new string[parameter];
            object[] values = new object[parameter];

            name[0] = "@idnhanvien";
            name[1] = "@hoten";
            name[2] = "@ngaysinh";
            name[3] = "@gioitinh";
            name[4] = "@ngaybatdaulam";
            name[5] = "@diachi";
            name[6] = "@email";
            name[7] = "@sodienthoai";
            name[8] = "@luong";

            values[0] = nhanvien_public.idnhanvien;
            values[1] = nhanvien_public.hoten;
            values[2] = nhanvien_public.ngaysinh;
            values[3] = nhanvien_public.gioitinh;
            values[4] = nhanvien_public.ngaybatdaulam;
            values[5] = nhanvien_public.diachi;
            values[6] = nhanvien_public.email;
            values[7] = nhanvien_public.sdt;
            values[8] = nhanvien_public.luong;

            string sql = "insert_nhanvien";
            return ketnoi.Execute(sql, name, values, parameter);
        }
        
        public int update_nhanvien(DTO_NhanVien nhanvien_public)
        {
            int parameter = 9;
            string[] name = new string[parameter];
            object[] values = new object[parameter];
            name[0] = "@idnhanvien";
            name[1] = "@hoten";
            name[2] = "@ngaysinh";
            name[3] = "@gioitinh";
            name[4] = "@ngaybatdaulam";
            name[5] = "@diachi";
            name[6] = "@email";
            name[7] = "@sodienthoai";
            name[8] = "@luong";

            values[0] = nhanvien_public.idnhanvien;
            values[1] = nhanvien_public.hoten;
            values[2] = nhanvien_public.ngaysinh;
            values[3] = nhanvien_public.gioitinh;
            values[4] = nhanvien_public.ngaybatdaulam;
            values[5] = nhanvien_public.diachi;
            values[6] = nhanvien_public.email;
            values[7] = nhanvien_public.sdt;
            values[8] = nhanvien_public.luong;
            string sql = "update_nhanvien";
            return ketnoi.Execute(sql, name, values, parameter);
        }
      
        public int delete_nhanvien(DTO_NhanVien nhanvien_public)
        {
            int parameter = 1;
            string[] name = new string[parameter];
            object[] values = new object[parameter];
            name[0] = "@idnhanvien";
            values[0] = nhanvien_public.idnhanvien;

            string sql = "delete_nhanvien";
            return ketnoi.Execute(sql, name, values, parameter);
        }

        public int check_dangky(DTO_NhanVien nhanvien_public)
        {
            string sql = "select count(*) from nhanvien where idnhanvien='" + nhanvien_public.idnhanvien + "'";
            return ketnoi.ReturnInteger(sql);
        }
    }
}
