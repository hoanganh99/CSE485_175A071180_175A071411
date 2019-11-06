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
    public class BUS_NhaCungCap
    {

        DAL_NhaCungCap dal_nhacungcap = new DAL_NhaCungCap();

        //dùng thủ tục
        //public DataTable load_nhacungcap()
        //{
            //return dal_nhacungcap.load_nhacungcap();
        //
        //dùng hàm
        public DataTable load_nhacungcap_fc()
        {
            return dal_nhacungcap.load_nhacungcap_fc();
        }

        public int insert_nhacungcap(DTO_NhaCungCap dto_nhacungcap)
        {
            return dal_nhacungcap.insert_nhacungcap(dto_nhacungcap);
        }
        public int update_nhacungcap(DTO_NhaCungCap dto_nhacungcap)
        {
            return dal_nhacungcap.update_nhacungcap(dto_nhacungcap);
        }
        public int delete_nhacungcap(DTO_NhaCungCap dto_nhacungcap)
        {
            return dal_nhacungcap.delete_nhacungcap(dto_nhacungcap);
        }
        public int checkdky(DTO_NhaCungCap dto_nhacungcap)
        {
            return dal_nhacungcap.check_dangky(dto_nhacungcap);
        }
    }
}
