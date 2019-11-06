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
    public class BUS_SanPham
    {
        DAL_SanPham dal_sanpham = new DAL_SanPham();

        public DataTable load_sanpham()
        {
            return dal_sanpham.load_sanpham();
        }
        public DataTable view_load_idncc()
        {
            return dal_sanpham.view_load_idncc();
        }
        public DataTable view_load_idlh()
        {
            return dal_sanpham.view_load_idlh();
        }
        public int insert_sanpham(DTO_SanPham dto_sanpham)
        {
            return dal_sanpham.insert_sanpham(dto_sanpham);
        }
        public int update_sanpham(DTO_SanPham dto_sanpham)
        {
            return dal_sanpham.update_sanpham(dto_sanpham);
        }
        public int delete_sanpham(DTO_SanPham dto_sanpham)
        {
            return dal_sanpham.delete_sanpham(dto_sanpham);
        }
        public int checkdky(DTO_SanPham dto_sanpham)
        {
            return dal_sanpham.Check_dangky(dto_sanpham);
        }
    }
}
