using System;
using System.Collections.Generic;
using System.Data;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using DAL_QuanLy;
using DTO_QuanLy;

namespace BUS_QuanLy
{
    public class BUS_TaiKhoan
    {
        DAL_TaiKhoan taikhoan_dal = new DAL_TaiKhoan();
        public int check_dangnhap(DTO_TaiKhoan dto_taikhoan)
        {
            return taikhoan_dal.check_dangnhap(dto_taikhoan);
        }
        public string load_id_taikhoan(DTO_TaiKhoan dto_taikhoan)
        {
            return taikhoan_dal.load_id_taikhoan(dto_taikhoan);
        }
        public int insert_taikhoan(DTO_TaiKhoan dto_taikhoan)
        {
            return taikhoan_dal.insert_taikhoan(dto_taikhoan);
        }
        public int delete_taikhoan(DTO_TaiKhoan dto_taikhoan)
        {
            return taikhoan_dal.delete_taikhoan(dto_taikhoan);
        }
        public int check_taikhoan(DTO_TaiKhoan dto_taikhoan)
        {
            return taikhoan_dal.check_taikhoan(dto_taikhoan);
        }
        public string check_quyen_taikhoan (DTO_TaiKhoan dto_taikhoan)
        {
            return taikhoan_dal.check_quyen_taikhoan(dto_taikhoan);
        }
    }
}
