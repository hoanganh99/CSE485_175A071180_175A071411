using DTO_QuanLy;
using System;
using System.Collections.Generic;
using System.Data;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace DAL_QuanLy
{
    public class DAL_DonHang
    {
        DAL_KetNoi ketnoi = new DAL_KetNoi();

        public DataTable load_donhang()
        {
            string sql = "load_donhang";
            return ketnoi.Load_Data(sql);
        }
        public DataTable view_load_idkhachang()
        {
            string sql = "select * from view_load_idkhachang";
            return ketnoi.Load_DataNotProcedure(sql);
        }
        public DataTable view_load_idnhanvien()
        {
            string sql = "select * from view_load_idnhanvien";
            return ketnoi.Load_DataNotProcedure(sql);
        }
        public DataTable view_load_idctygiaohang()
        {
            string sql = "select * from view_load_idctygiaohang";
            return ketnoi.Load_DataNotProcedure(sql);
        }

        public int insert_donhang(DTO_DonHang dto_donhang)
        {
            int parameter = 8;
            string[] name = new string[parameter];
            object[] values = new object[parameter];

            name[0] = "@iddonhang";
            name[1] = "@idkhachhang";
            name[2] = "@idnhanvien";
            name[3] = "@ngaydathang";
            name[4] = "@ngaygiaohang";
            name[5] = "@ngayyeucauchuyen";
            name[6] = "@idcty";
            name[7] = "@diachigiaohang";
            values[0] = dto_donhang.iddonhang;
            values[1] = dto_donhang.idkhachhang;
            values[2] = dto_donhang.idnhanvien;
            values[3] = dto_donhang.ngaydathang;
            values[4] = dto_donhang.ngaygiaohang;
            values[5] = dto_donhang.ngayyeucauchuyen;
            values[6] = dto_donhang.idcty;
            values[7] = dto_donhang.diachigiaohang;

            string sql = "insert_donhang";
            return ketnoi.Execute(sql, name, values, parameter);
        }

        public int update_donhang(DTO_DonHang dto_donhang)
        {
            int parameter = 8;
            string[] name = new string[parameter];
            object[] values = new object[parameter];

            name[0] = "@iddonhang";
            name[1] = "@idkhachhang";
            name[2] = "@idnhanvien";
            name[3] = "@ngaydathang";
            name[4] = "@ngaygiaohang";
            name[5] = "@ngayyeucauchuyen";
            name[6] = "@idcty";
            name[7] = "@diachigiaohang";
            values[0] = dto_donhang.iddonhang;
            values[1] = dto_donhang.idkhachhang;
            values[2] = dto_donhang.idnhanvien;
            values[3] = dto_donhang.ngaydathang;
            values[4] = dto_donhang.ngaygiaohang;
            values[5] = dto_donhang.ngayyeucauchuyen;
            values[6] = dto_donhang.idcty;
            values[7] = dto_donhang.diachigiaohang;

            string sql = "update_donhang";
            return ketnoi.Execute(sql, name, values, parameter);
        }

        public int delete_donhang(DTO_DonHang dto_donhang)
        {
            int parameter = 1;
            string[] name = new string[parameter];
            object[] values = new object[parameter];
            name[0] = "@iddonhang";
            values[0] = dto_donhang.iddonhang;

            string sql = "delete_donhang";
            return ketnoi.Execute(sql, name, values, parameter);
        }

        public int delete_donhang_idkhachhang(DTO_DonHang dto_donhang)
        {
            int parameter = 1;
            string[] name = new string[parameter];
            object[] values = new object[parameter];
            name[0] = "@idkhachhang";

            values[0] = dto_donhang.idkhachhang;

            string sql = "delete_donhang_idkhachhang";
            return ketnoi.Execute(sql, name, values, parameter);
        }

        public int check_dangky(DTO_DonHang dto_donhang)
        {
            string sql = "select count(*) from donhang where iddonhang='" + dto_donhang.iddonhang + "'";
            return ketnoi.ReturnInteger(sql);
        }
    }
}
