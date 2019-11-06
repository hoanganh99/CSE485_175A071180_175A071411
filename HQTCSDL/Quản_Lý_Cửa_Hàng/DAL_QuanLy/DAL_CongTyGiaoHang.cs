using DTO_QuanLy;
using System;
using System.Collections.Generic;
using System.Data;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace DAL_QuanLy
{
    public class DAL_CongTyGiaoHang
    {
        DAL_KetNoi ketnoi = new DAL_KetNoi();


        public DataTable load_ctygiaohang()
        {
            string sql = "load_ctygiaohang";
            return ketnoi.Load_Data(sql);
        }
        public int insert_ctygiaohang(DTO_CongTyGiaoHang dto_congtygiaohang)
        {
            int parameter = 4;
            string[] name = new string[parameter];
            object[] values = new object[parameter];

            name[0] = "@idcty";
            name[1] = "@tencongty";
            name[2] = "@sodienthoai";
            name[3] = "@diachi";
           
            values[0] = dto_congtygiaohang.idcty;
            values[1] = dto_congtygiaohang.tencongty;
            values[2] = dto_congtygiaohang.sodienthoai;
            values[3] = dto_congtygiaohang.diachi;

            string sql = "insert_ctygiaohang";
            return ketnoi.Execute(sql, name, values, parameter);
        }

        public int update_ctygiaohang(DTO_CongTyGiaoHang dto_congtygiaohang)
        {
            int parameter = 4;
            string[] name = new string[parameter];
            object[] values = new object[parameter];

            name[0] = "@idcty";
            name[1] = "@tencongty";
            name[2] = "@sodienthoai";
            name[3] = "@diachi";

            values[0] = dto_congtygiaohang.idcty;
            values[1] = dto_congtygiaohang.tencongty;
            values[2] = dto_congtygiaohang.sodienthoai;
            values[3] = dto_congtygiaohang.diachi;

            string sql = "update_ctygiaohang";
            return ketnoi.Execute(sql, name, values, parameter);
        }

        public int delete_ctygiaohang(DTO_CongTyGiaoHang dto_congtygiaohang)
        {
            int parameter = 1;
            string[] name = new string[parameter];
            object[] values = new object[parameter];
            name[0] = "@idcty";
            values[0] = dto_congtygiaohang.idcty;

            string sql = "delete_ctygiaohang";
            return ketnoi.Execute(sql, name, values, parameter);
        }

        public int check_dangky(DTO_CongTyGiaoHang dto_congtygiaohang)
        {
            string sql = "select count(*) from ctygiaohang where idcty='" + dto_congtygiaohang.idcty + "'";
            return ketnoi.ReturnInteger(sql);
        }
    }
}
