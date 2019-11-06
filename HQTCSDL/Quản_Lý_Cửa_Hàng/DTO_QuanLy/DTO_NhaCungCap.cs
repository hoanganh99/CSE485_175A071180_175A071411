using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace DTO_QuanLy
{
    public class DTO_NhaCungCap
    {
        private string _idnhacungcap;

        public string idnhacungcap
        {
            get { return _idnhacungcap; }
            set { _idnhacungcap = value; }
        }

        private string _tencongty;

        public string tencongty
        {
            get { return _tencongty; }
            set { _tencongty = value; }
        }
        private string _diachi;

        public string diachi
        {
            get { return _diachi; }
            set { _diachi = value; }
        }
        private string _sodienthoai;

        public string sodienthoai
        {
            get { return _sodienthoai; }
            set { _sodienthoai = value; }
        }
        private string _website;

        public string website
        {
            get { return _website; }
            set { _website = value; }
        }

        private string _congiaodich;

        public string congiaodich
        {
            get { return _congiaodich; }
            set { _congiaodich = value; }
        }
    }
}
