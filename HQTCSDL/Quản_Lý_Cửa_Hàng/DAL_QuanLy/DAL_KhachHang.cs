using DTO_QuanLy;
using System;
using System.Collections.Generic;
using System.Data;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace DAL_QuanLy
{
    public class DAL_KhachHang
    {
        DAL_KetNoi ketnoi = new DAL_KetNoi();

        public DataTable load_khachhang()
        {
            string sql = "load_khachhang";
            return ketnoi.Load_Data(sql);
        }
        public int insert_khachhang(DTO_KhachHang dto_khachhang)
        {
            int parameter = 6;
            string[] name = new string[parameter];
            object[] values = new object[parameter];

            name[0] = "@idkhachhang";
            name[1] = "@hoten";
            name[2] = "@gioitinh";
            name[3] = "@diachi";
            name[4] = "@email";
            name[5] = "@sodienthoai";
           
            values[0] = dto_khachhang.idkhachhang;
            values[1] = dto_khachhang.hoten;
            values[2] = dto_khachhang.gioitinh;
            values[3] = dto_khachhang.diachi;
            values[4] = dto_khachhang.email;
            values[5] = dto_khachhang.sodienthoai;

            string sql = "insert_khachhang";
            return ketnoi.Execute(sql, name, values, parameter);
        }

        public int update_khachhang(DTO_KhachHang dto_khachhang)
        {
            int parameter = 6;
            string[] name = new string[parameter];
            object[] values = new object[parameter];

            name[0] = "@idkhachhang";
            name[1] = "@hoten";
            name[2] = "@gioitinh";
            name[3] = "@diachi";
            name[4] = "@email";
            name[5] = "@sodienthoai";

            values[0] = dto_khachhang.idkhachhang;
            values[1] = dto_khachhang.hoten;
            values[2] = dto_khachhang.gioitinh;
            values[3] = dto_khachhang.diachi;
            values[4] = dto_khachhang.email;
            values[5] = dto_khachhang.sodienthoai;

            string sql = "update_khachhang";
            return ketnoi.Execute(sql, name, values, parameter);
        }

        public int delete_khachhang(DTO_KhachHang dto_khachhang)
        {
            int parameter = 1;
            string[] name = new string[parameter];
            object[] values = new object[parameter];
            name[0] = "@idkhachhang";
            values[0] = dto_khachhang.idkhachhang;

            string sql = "delete_khachhang";
            return ketnoi.Execute(sql, name, values, parameter);
        }

        public int check_dangky(DTO_KhachHang dto_khachhang)
        {
            string sql = "select count(*) from khachhang where idkhachhang='" + dto_khachhang.idkhachhang + "'";
            return ketnoi.ReturnInteger(sql);
        }
    }
}
