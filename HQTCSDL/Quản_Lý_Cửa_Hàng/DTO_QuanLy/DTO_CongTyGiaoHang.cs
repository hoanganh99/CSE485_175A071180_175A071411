using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace DTO_QuanLy
{
    public class DTO_CongTyGiaoHang
    {
        private string _idcty;

        public string idcty
        {
            get { return _idcty; }
            set { _idcty = value; }
        }

        private string _tencongty;

        public string tencongty
        {
            get { return _tencongty; }
            set { _tencongty = value; }
        }

        private string _sodienthoai;

        public string sodienthoai
        {
            get { return _sodienthoai; }
            set { _sodienthoai = value; }
        }

        private string _diachi;

        public string diachi
        {
            get { return _diachi; }
            set { _diachi = value; }
        }
    }
}
