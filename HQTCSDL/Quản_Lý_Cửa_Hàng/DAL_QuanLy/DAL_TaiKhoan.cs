using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using DTO_QuanLy;


namespace DAL_QuanLy
{
    public class DAL_TaiKhoan
    {
        DAL_KetNoi ketnoi = new DAL_KetNoi();
      
        public int check_dangnhap(DTO_TaiKhoan dto_taikhoan)
        {
            string sql = "select count(*) from taikhoan where tentk='" + dto_taikhoan.Tentk + "' and matkhau='" + dto_taikhoan.Matkhau + "'";
            return ketnoi.ReturnInteger(sql);
        }

        public string load_id_taikhoan(DTO_TaiKhoan dto_taikhoan)
        {
            string sql = "select id from taikhoan where tentk ='" + dto_taikhoan.Tentk + "' and matkhau='" + dto_taikhoan.Matkhau + "'";
            return ketnoi.ReturnString(sql);
        }

        public int insert_taikhoan(DTO_TaiKhoan dto_taikhoan)
        {
            int parameter = 4;
            string[] name = new string[parameter];
            object[] values = new object[parameter];
            name[0] = "@tentk";
            name[1] = "@matkhau";
            name[2] = "@quyen";
            name[3] = "@id";

            values[0] = dto_taikhoan.Tentk;
            values[1] = dto_taikhoan.Matkhau;
            values[2] = dto_taikhoan.Quyen;
            values[3] = dto_taikhoan.ID;
            string sql = "insert_taikhoan"; 
            return ketnoi.Execute(sql, name, values, parameter);
        }

        public int delete_taikhoan(DTO_TaiKhoan dto_taikhoan)
        {
            int parameter = 1;
            string[] name = new string[parameter];
            object[] values = new object[parameter];
            name[0] = "@id";   
            values[0] = dto_taikhoan.ID;
            string sql = "delete_taikhoan"; 
            return ketnoi.Execute(sql, name, values, parameter);
        }

        public int check_taikhoan(DTO_TaiKhoan dto_taikhoan)
        {
            string sql = "select count(*) from taikhoan where tentk ='" + dto_taikhoan.Tentk + "'";
            return ketnoi.ReturnInteger(sql);
        }

        public string check_quyen_taikhoan(DTO_TaiKhoan dto_taikhoan)
        {
            string sql = "select quyen from taikhoan where tentk ='" + dto_taikhoan.Tentk + "' and matkhau='" + dto_taikhoan.Matkhau + "'";
            return ketnoi.ReturnString(sql);
        }



    }
}
