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
    public class BUS_DonHang
    {
        DAL_DonHang dal_donhang = new DAL_DonHang();

        //phần thủ tục
        public DataTable load_donhang()
        {
            return dal_donhang.load_donhang();
        }
        public int insert_donhang(DTO_DonHang dto_donhang)
        {
            return dal_donhang.insert_donhang(dto_donhang);
        }
        public int update_donhang(DTO_DonHang dto_donhang)
        {
            return dal_donhang.update_donhang(dto_donhang);
        }
        public int delete_donhang(DTO_DonHang dto_donhang)
        {
            return dal_donhang.delete_donhang(dto_donhang);
        }
        public int delete_donhang_idkhachhang(DTO_DonHang dto_donhang)
        {
            return dal_donhang.delete_donhang_idkhachhang(dto_donhang);
        }
        public int checkdky(DTO_DonHang dto_donhang)
        {
            return dal_donhang.check_dangky(dto_donhang);
        }
        //phần view
        public DataTable view_load_idkhachang()
        {
            return dal_donhang.view_load_idkhachang();
        }
        public DataTable view_load_idnhanvien()
        {
            return dal_donhang.view_load_idnhanvien();
        }
        public DataTable view_load_idctygiaohang()
        {
            return dal_donhang.view_load_idctygiaohang();
        }
    }
}
