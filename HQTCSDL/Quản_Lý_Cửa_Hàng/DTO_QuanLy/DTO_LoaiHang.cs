using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace DTO_QuanLy
{
   public class DTO_LoaiHang
    {
        private string _idloaihang;
        public string idloaihang
        {
            get { return _idloaihang; }
            set { _idloaihang = value; }
        }

        private string _tenloaihang;

        public string tenloaihang
        {
            get { return _tenloaihang; }
            set { _tenloaihang = value; }
        }

        private string _mota;

        public string mota
        {
            get { return _mota; }
            set { _mota = value; }
        }
    }
}
