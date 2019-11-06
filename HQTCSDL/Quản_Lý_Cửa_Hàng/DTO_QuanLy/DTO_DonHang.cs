using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace DTO_QuanLy
{
    public class DTO_DonHang
    {
        private string _iddonhang;

        public string iddonhang
        {
            get { return _iddonhang; }
            set { _iddonhang = value; }
        }
        private string _idkhachhang;

        public string idkhachhang
        {
            get { return _idkhachhang; }
            set { _idkhachhang = value; }
        }
        private string _idnhanvien;

        public string idnhanvien
        {
            get { return _idnhanvien; }
            set { _idnhanvien = value; }
        }
        private DateTime _ngaydathang;

        public DateTime ngaydathang
        {
            get { return _ngaydathang; }
            set { _ngaydathang = value; }
        }
        private DateTime _ngaygiaohang;

        public DateTime ngaygiaohang
        {
            get { return _ngaygiaohang; }
            set { _ngaygiaohang = value; }
        }
        private DateTime _ngayyeucauchuyen;

        public DateTime ngayyeucauchuyen
        {
            get { return _ngayyeucauchuyen; }
            set { _ngayyeucauchuyen = value; }
        }
        private string _idcty;

        public string idcty
        {
            get { return _idcty; }
            set { _idcty = value; }
        }
        private string _diachigiaohang;

        public string diachigiaohang
        {
            get { return _diachigiaohang; }
            set { _diachigiaohang = value; }
        }
    }
}
