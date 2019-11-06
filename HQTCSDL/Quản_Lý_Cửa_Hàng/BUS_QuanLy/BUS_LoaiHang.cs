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
    public class BUS_LoaiHang
    {
        DAL_LoaiHang dal_loaihang = new DAL_LoaiHang();
        
        //c1: dùng thủ tục
        public DataTable load_loaihang()
        {
            return dal_loaihang.load_loaihang();
        }
        //c2: dùng hàm
        public DataTable load_loaihangfc()
        {
            return dal_loaihang.load_loaihangfc();
        }

        public int insert_loaihang(DTO_LoaiHang dto_loaihang)
        {
            return dal_loaihang.insert_loaihang(dto_loaihang);
        }
        public int update_loaihang(DTO_LoaiHang dto_loaihang)
        {
            return dal_loaihang.update_loaihang(dto_loaihang);
        }
        public int delete_loaihang(DTO_LoaiHang dto_loaihang)
        {
            return dal_loaihang.delete_loaihang(dto_loaihang);
        }
    }
}
