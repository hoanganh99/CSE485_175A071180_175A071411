using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace DTO_QuanLy
{
    public class DTO_KhachHang
    {
        private string _idkhachhang;

        public string idkhachhang
        {
            get { return _idkhachhang; }
            set { _idkhachhang = value; }
        }
        private string _hoten;

        public string hoten
        {
            get { return _hoten; }
            set { _hoten = value; }
        }
        private string _gioitinh;

        public string gioitinh
        {
            get { return _gioitinh; }
            set { _gioitinh = value; }
        }
        private string _diachi;

        public string diachi
        {
            get { return _diachi; }
            set { _diachi = value; }
        }
        private string _email;

        public string email
        {
            get { return _email; }
            set { _email = value; }
        }
        private string _sodienthoai;

        public string sodienthoai
        {
            get { return _sodienthoai; }
            set { _sodienthoai = value; }
        }
    }
}
