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
    public class BUS_CongTyGiaoHang
    {
        DAL_CongTyGiaoHang dal_congtygiaohang = new DAL_CongTyGiaoHang();

        public DataTable load_ctygiaohang()
        {
            return dal_congtygiaohang.load_ctygiaohang();
        }
        public int insert_ctygiaohang(DTO_CongTyGiaoHang dto_congtygiaohang)
        {
            return dal_congtygiaohang.insert_ctygiaohang(dto_congtygiaohang);
        }
        public int update_ctygiaohang(DTO_CongTyGiaoHang dto_congtygiaohang)
        {
            return dal_congtygiaohang.update_ctygiaohang(dto_congtygiaohang);
        }
        public int delete_ctygiaohang(DTO_CongTyGiaoHang dto_congtygiaohang)
        {
            return dal_congtygiaohang.delete_ctygiaohang(dto_congtygiaohang);
        }
        public int checkdky(DTO_CongTyGiaoHang dto_congtygiaohang)
        {
            return dal_congtygiaohang.check_dangky(dto_congtygiaohang);
        }
    }
}
