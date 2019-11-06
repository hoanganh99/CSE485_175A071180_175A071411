using System;
using System.Collections.Generic;
using System.Data;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using DTO_QuanLy;

namespace DAL_QuanLy
{
    public class DAL_LoaiHang
    {
        DAL_KetNoi ketnoi = new DAL_KetNoi();

        //dùng thủ tục
        public DataTable load_loaihang()
        {
            string sql = "load_loaihang";
            return ketnoi.Load_Data(sql);
        }
        //dùng hàm
        public DataTable load_loaihangfc()
        {
            string sql = "select * from dbo.load_loaihang_fc()";
            return ketnoi.Load_DataNotProcedure(sql);
        }

        public int insert_loaihang(DTO_LoaiHang dto_loaihang)
        {
            int parameter = 3;
            string[] name = new string[parameter];
            object[] values = new object[parameter];

            name[0] = "@idloaihang";
            name[1] = "@tenloaihang";
            name[2] = "@mota";
            values[0] = dto_loaihang.idloaihang;
            values[1] = dto_loaihang.tenloaihang;
            values[2] = dto_loaihang.mota;
      
            string sql = "insert_loaihang";
            return ketnoi.Execute(sql, name, values, parameter);
        }
        public int update_loaihang(DTO_LoaiHang dto_loaihang)
        {
            int parameter = 3;
            string[] name = new string[parameter];
            object[] values = new object[parameter];

            name[0] = "@idloaihang";
            name[1] = "@tenloaihang";
            name[2] = "@mota";
            values[0] = dto_loaihang.idloaihang;
            values[1] = dto_loaihang.tenloaihang;
            values[2] = dto_loaihang.mota;
            string sql = "update_loaihang";
            return ketnoi.Execute(sql, name, values, parameter);
        }

        public int delete_loaihang(DTO_LoaiHang dto_loaihang)
        {
            int parameter = 1;
            string[] name = new string[parameter];
            object[] values = new object[parameter];
            name[0] = "@idloaihang";
            values[0] = dto_loaihang.idloaihang;
            string sql = "delete_loaihang";
            return ketnoi.Execute(sql, name, values, parameter);
        }

        public int check_dangky(DTO_LoaiHang dto_loaihang)
        {
            string sql = "select count(*) from loaihang where idloaihang='" + dto_loaihang.idloaihang + "'";
            return ketnoi.ReturnInteger(sql);
        }
    }
}
