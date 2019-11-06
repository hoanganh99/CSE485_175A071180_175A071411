using DAL_QuanLy;
using DTO_QuanLy;
using System;
using System.Collections.Generic;
using System.Data;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace BUS_QuanLy
{
    public class BUS_SP_DonHang
    {
        DAL_SP_DonHang dal_sp_donhang = new DAL_SP_DonHang();

        //thủ tục
        public DataTable load_sp_donhang()
        {
            return dal_sp_donhang.load_sp_donhang();
        }
        public int insert_sp_donhang(DTO_SP_DonHang dto_sp_donhang)
        {
            return dal_sp_donhang.insert_sp_donhang(dto_sp_donhang);
        }
        public int update_sp_donhang(DTO_SP_DonHang dto_sp_donhang)
        {
            return dal_sp_donhang.update_sp_donhang(dto_sp_donhang);
        }
        public int delete_sp_donhang(DTO_SP_DonHang dto_sp_donhang)
        {
            return dal_sp_donhang.delete_sp_donhang(dto_sp_donhang);
        }
        public int delete_sp_donhang1(DTO_SP_DonHang dto_sp_donhang)
        {
            return dal_sp_donhang.delete_sp_donhang1(dto_sp_donhang);
        }
        public int delete_sp_donhang_idkhachhang(DTO_SP_DonHang dto_sp_donhang)
        {
            return dal_sp_donhang.delete_sp_donhang_idkhachhang(dto_sp_donhang);
        }
        public int checkdky(DTO_SP_DonHang dto_sp_donhang)
        {
            return dal_sp_donhang.Check_dangky(dto_sp_donhang);
        }

        //view
        public DataTable view_iddonhang()
        {
            return dal_sp_donhang.view_iddonhang();
        }
        public DataTable view_idsanpham()
        {
            return dal_sp_donhang.view_idsanpham();
        }
        public DataTable view_idkhachhang()
        {
            return dal_sp_donhang.view_idkhachhang();
        }
    }
}
