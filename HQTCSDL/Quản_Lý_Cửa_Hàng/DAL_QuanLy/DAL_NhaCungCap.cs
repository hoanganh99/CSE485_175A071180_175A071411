using DTO_QuanLy;
using System;
using System.Collections.Generic;
using System.Data;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace DAL_QuanLy
{
    public class DAL_NhaCungCap
    {
        DAL_KetNoi ketnoi = new DAL_KetNoi();

        //dùng thủ tục
        public DataTable load_nhacungcap()
        {
            string sql = "load_nhacungcap";
            return ketnoi.Load_Data(sql);
        }
        //dùng hàm
        public DataTable load_nhacungcap_fc()
        {
            string sql = "select * from dbo.load_nhacungcap_fc()";
            return ketnoi.Load_DataNotProcedure(sql);
        }
        public int insert_nhacungcap(DTO_NhaCungCap dto_nhacungcap)
        {
            int parameter = 6;
            string[] name = new string[parameter];
            object[] values = new object[parameter];

            name[0] = "@idnhacungcap";
            name[1] = "@tencongty";
            name[2] = "@diachi";
            name[3] = "@sodienthoai";
            name[4] = "@website";
            name[5] = "@congiaodich";
            
            values[0] = dto_nhacungcap.idnhacungcap;
            values[1] = dto_nhacungcap.tencongty;
            values[2] = dto_nhacungcap.diachi;
            values[3] = dto_nhacungcap.sodienthoai;
            values[4] = dto_nhacungcap.website;
            values[5] = dto_nhacungcap.congiaodich;

            string sql = "insert_nhacungcap";
            return ketnoi.Execute(sql, name, values, parameter);
        }

        public int delete_nhacungcap(DTO_NhaCungCap dto_nhacungcap)
        {
            int parameter = 1;
            string[] name = new string[parameter];
            object[] values = new object[parameter];
            name[0] = "@idnhacungcap";
            values[0] = dto_nhacungcap.idnhacungcap;

            string sql = "delete_nhacungcap";
            return ketnoi.Execute(sql, name, values, parameter);
        }

        public int update_nhacungcap(DTO_NhaCungCap dto_nhacungcap)
        {
            int parameter = 6;
            string[] name = new string[parameter];
            object[] values = new object[parameter];

            name[0] = "@idnhacungcap";
            name[1] = "@tencongty";
            name[2] = "@diachi";
            name[3] = "@sodienthoai";
            name[4] = "@website";
            name[5] = "@congiaodich";

            values[0] = dto_nhacungcap.idnhacungcap;
            values[1] = dto_nhacungcap.tencongty;
            values[2] = dto_nhacungcap.diachi;
            values[3] = dto_nhacungcap.sodienthoai;
            values[4] = dto_nhacungcap.website;
            values[5] = dto_nhacungcap.congiaodich;

            string sql = "update_nhacungcap";
            return ketnoi.Execute(sql, name, values, parameter);
        }


        public int check_dangky(DTO_NhaCungCap dto_nhacungcap)
        {
            string sql = "select count(*) from nhacungcap where idnhacungcap='" + dto_nhacungcap.idnhacungcap + "'";
            return ketnoi.ReturnInteger(sql);
        }
    }
}
