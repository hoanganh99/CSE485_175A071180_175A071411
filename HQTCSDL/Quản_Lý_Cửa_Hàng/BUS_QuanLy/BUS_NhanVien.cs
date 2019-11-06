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
    public class BUS_NhanVien
    {
        DAL_NhanVien nhanvien_dal = new DAL_NhanVien();

        public DataTable load_nhanvien()
        {
            return nhanvien_dal.load_nhanvien();
        }
        public DataTable load_nhanvien_fc()
        {
            return nhanvien_dal.load_nhanvien_fc();
        }
        public int insert_nhanvien(DTO_NhanVien nhanvien_public)
        {
            return nhanvien_dal.insert_nhanvien(nhanvien_public);
        }
        public int update_nhanvien(DTO_NhanVien nhanvien_public)
        {
            return nhanvien_dal.update_nhanvien(nhanvien_public);
        }
        public int delete_nhanvien(DTO_NhanVien nhanvien_public)
        {
            return nhanvien_dal.delete_nhanvien(nhanvien_public);
        }
        public int checkdky(DTO_NhanVien nhanvien_public)
        {
            return nhanvien_dal.check_dangky(nhanvien_public);
        }
    }
}
