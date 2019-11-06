using DTO_QuanLy;
using System;
using System.Collections.Generic;
using System.Data;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace DAL_QuanLy
{
    public class DAL_SanPham
    {
        DAL_KetNoi ketnoi = new DAL_KetNoi();

        public DataTable load_sanpham()
        {
            string sql = "load_sanpham";
            return ketnoi.Load_Data(sql);
        }
        public DataTable view_load_idncc()
        {
            string sql = "select * from view_load_idncc";
            return ketnoi.Load_DataNotProcedure(sql);
        }
        public DataTable view_load_idlh()
        {
            string sql = "select * from view_load_idlh";
            return ketnoi.Load_DataNotProcedure(sql);
        }
        public int insert_sanpham(DTO_SanPham dto_sanpham)
        {
            int parameter = 9;
            string[] name = new string[parameter];
            object[] values = new object[parameter];

            name[0] = "@idsanpham";
            name[1] = "@tensp";
            name[2] = "@idnhacungcap";
            name[3] = "@idloaihang";
            name[4] = "@dongianhap";
            name[5] = "@soluongcon";
            name[6] = "@soluongchocungcap";
            name[7] = "@mota";
            name[8] = "@ngungban";

            values[0] = dto_sanpham.idsanpham;
            values[1] = dto_sanpham.tensp;
            values[2] = dto_sanpham.idnhacungcap;
            values[3] = dto_sanpham.idloaihang;
            values[4] = dto_sanpham.dongianhap;
            values[5] = dto_sanpham.soluongcon;
            values[6] = dto_sanpham.soluongchocungcap;
            values[7] = dto_sanpham.mota;
            values[8] = dto_sanpham.ngungban;

            string sql = "insert_sanpham";
            return ketnoi.Execute(sql, name, values, parameter);
        }


        public int update_sanpham(DTO_SanPham dto_sanpham)
        {
            int parameter = 9;
            string[] name = new string[parameter];
            object[] values = new object[parameter];

            name[0] = "@idsanpham";
            name[1] = "@tensp";
            name[2] = "@idnhacungcap";
            name[3] = "@idloaihang";
            name[4] = "@dongianhap";
            name[5] = "@soluongcon";
            name[6] = "@soluongchocungcap";
            name[7] = "@mota";
            name[8] = "@ngungban";

            values[0] = dto_sanpham.idsanpham;
            values[1] = dto_sanpham.tensp;
            values[2] = dto_sanpham.idnhacungcap;
            values[3] = dto_sanpham.idloaihang;
            values[4] = dto_sanpham.dongianhap;
            values[5] = dto_sanpham.soluongcon;
            values[6] = dto_sanpham.soluongchocungcap;
            values[7] = dto_sanpham.mota;
            values[8] = dto_sanpham.ngungban;

            string sql = "update_sanpham";
            return ketnoi.Execute(sql, name, values, parameter);
        }

        public int delete_sanpham(DTO_SanPham dto_sanpham)
        {
            int parameter = 1;
            string[] name = new string[parameter];
            object[] values = new object[parameter];
            name[0] = "@idsanpham";
            values[0] = dto_sanpham.idsanpham;

            string sql = "delete_sanpham";
            return ketnoi.Execute(sql, name, values, parameter);
        }

        public int Check_dangky(DTO_SanPham dto_sanpham)
        {
            string sql = "select count(*) from sanpham where idsanpham='" + dto_sanpham.idsanpham + "'";
            return ketnoi.ReturnInteger(sql);
        }
    }
}
