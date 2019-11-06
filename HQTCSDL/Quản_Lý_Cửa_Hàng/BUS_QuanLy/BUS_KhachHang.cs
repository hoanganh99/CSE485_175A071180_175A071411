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
    public class BUS_KhachHang
    {
        DAL_KhachHang dal_khachhang = new DAL_KhachHang();

        public DataTable load_khachhang()
        {
            return dal_khachhang.load_khachhang();
        }
        public int insert_khachhang(DTO_KhachHang dto_khachhang)
        {
            return dal_khachhang.insert_khachhang(dto_khachhang);
        }
        public int update_khachhang(DTO_KhachHang dto_khachhang)
        {
            return dal_khachhang.update_khachhang(dto_khachhang);
        }
        public int delete_khachhang(DTO_KhachHang dto_khachhang)
        {
            return dal_khachhang.delete_khachhang(dto_khachhang);
        }
        public int checkdky(DTO_KhachHang dto_khachhang)
        {
            return dal_khachhang.check_dangky(dto_khachhang);
        }
    }
}
