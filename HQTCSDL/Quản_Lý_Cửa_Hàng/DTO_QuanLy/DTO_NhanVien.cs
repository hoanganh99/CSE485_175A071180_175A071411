using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace DTO_QuanLy
{
   public class DTO_NhanVien
    {
        private string _idnhanvien;

        public string idnhanvien
        {
            get { return _idnhanvien; }
            set { _idnhanvien = value; }
        }

        private string _hoten;

        public string hoten
        {
            get { return _hoten; }
            set { _hoten = value; }
        }
        private DateTime _ngaysinh;

        public DateTime ngaysinh
        {
            get { return _ngaysinh; }
            set { _ngaysinh = value; }
        }
        private string _gioitinh;

        public string gioitinh
        {
            get { return _gioitinh; }
            set { _gioitinh = value; }
        }
        private DateTime _ngaybatdaulam;

        public DateTime ngaybatdaulam
        {
            get { return _ngaybatdaulam; }
            set { _ngaybatdaulam = value; }
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

        private string _sdt;

        public string sdt
        {
            get { return _sdt; }
            set { _sdt = value; }
        }


        private string _luong;
       
        public string luong
        {
            get { return _luong; }
            set { _luong = value; }
        }


    }
}
