using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace DTO_QuanLy
{
    public class DTO_SP_DonHang
    {
        private string _iddonhang;

        public string iddonhang
        {
            get { return _iddonhang; }
            set { _iddonhang = value; }
        }
        private string _idsanpham;

        public string idsanpham
        {
            get { return _idsanpham; }
            set { _idsanpham = value; }
        }
        private string _idkhachhang;

        public string idkhachhang
        {
            get { return _idkhachhang; }
            set { _idkhachhang = value; }
        }
        private string _soluong;

        public string soluong
        {
            get { return _soluong; }
            set { _soluong = value; }
        }
        private string _dongiaban;

        public string dongiaban
        {
            get { return _dongiaban; }
            set { _dongiaban = value; }
        }

        private string _tylegiamgia;

        public string tylegiamgia
        {
            get { return _tylegiamgia; }
            set { _tylegiamgia = value; }
        }
    }
}
