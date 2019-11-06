using DTO_QuanLy;
using System;
using System.Collections.Generic;
using System.Data;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace DAL_QuanLy
{
    public class DAL_SP_DonHang
    {
        DAL_KetNoi ketnoi = new DAL_KetNoi();

        //thủ tục
        public DataTable load_sp_donhang()
        {
            string sql = "load_sp_donhang";
            return ketnoi.Load_Data(sql);
        }
        public int insert_sp_donhang(DTO_SP_DonHang dto_sp_donhang)
        {
            int parameter = 6;
            string[] name = new string[parameter];
            object[] values = new object[parameter];

            name[0] = "@iddonhang";
            name[1] = "@idsanpham";
            name[2] = "@idkhachhang";
            name[3] = "@soluong";
            name[4] = "@dongiaban";
            name[5] = "@tylegiamgia";
           

            values[0] = dto_sp_donhang.iddonhang;
            values[1] = dto_sp_donhang.idsanpham;
            values[2] = dto_sp_donhang.idkhachhang;
            values[3] = dto_sp_donhang.soluong;
            values[4] = dto_sp_donhang.dongiaban;
            values[5] = dto_sp_donhang.tylegiamgia;
            
            string sql = "insert_sp_donhang";
            return ketnoi.Execute(sql, name, values, parameter);
        }
        public int update_sp_donhang(DTO_SP_DonHang dto_sp_donhang)
        {
            int parameter = 6;
            string[] name = new string[parameter];
            object[] values = new object[parameter];

            name[0] = "@iddonhang";
            name[1] = "@idsanpham";
            name[2] = "@idkhachhang";
            name[3] = "@soluong";
            name[4] = "@dongiaban";
            name[5] = "@tylegiamgia";


            values[0] = dto_sp_donhang.iddonhang;
            values[1] = dto_sp_donhang.idsanpham;
            values[2] = dto_sp_donhang.idkhachhang;
            values[3] = dto_sp_donhang.soluong;
            values[4] = dto_sp_donhang.dongiaban;
            values[5] = dto_sp_donhang.tylegiamgia;

            string sql = "update_sp_donhang";
            return ketnoi.Execute(sql, name, values, parameter);
        }
        public int delete_sp_donhang(DTO_SP_DonHang dto_sp_donhang)
        {
            int parameter = 3;
            string[] name = new string[parameter];
            object[] values = new object[parameter];
            name[0] = "@iddonhang";
            name[1] = "@idsanpham";
            name[2] = "@idkhachhang";

            values[0] = dto_sp_donhang.iddonhang;
            values[1] = dto_sp_donhang.idsanpham;
            values[2] = dto_sp_donhang.idkhachhang;

            string sql = "delete_sp_donhang";
            return ketnoi.Execute(sql, name, values, parameter);
        }
        public int delete_sp_donhang1(DTO_SP_DonHang dto_sp_donhang)
        {
            int parameter = 1;
            string[] name = new string[parameter];
            object[] values = new object[parameter];
            name[0] = "@iddonhang";
            values[0] = dto_sp_donhang.iddonhang;
          
            string sql = "delete_sp_donhang1";
            return ketnoi.Execute(sql, name, values, parameter);
        }

        public int delete_sp_donhang_idkhachhang(DTO_SP_DonHang dto_sp_donhang)
        {
            int parameter = 1;
            string[] name = new string[parameter];
            object[] values = new object[parameter];
            name[0] = "@idkhachhang";
            values[0] = dto_sp_donhang.idkhachhang;

            string sql = "delete_sp_donhang_idkhachhang";
            return ketnoi.Execute(sql, name, values, parameter);
        }

        public int Check_dangky(DTO_SP_DonHang dto_sp_donhang)
        {
            string sql = "select count(*) from sp_donhang where iddonhang='" + dto_sp_donhang.iddonhang + "'";
            return ketnoi.ReturnInteger(sql);
        }

        //phần view
        public DataTable view_iddonhang()
        {
            string sql = "select * from view_iddonhang";
            return ketnoi.Load_DataNotProcedure(sql);
        }
        public DataTable view_idsanpham()
        {
            string sql = "select * from view_idsanpham";
            return ketnoi.Load_DataNotProcedure(sql);
        }
        public DataTable view_idkhachhang()
        {
            string sql = "select * from view_idkhachhang";
            return ketnoi.Load_DataNotProcedure(sql);
        }
    }
}
