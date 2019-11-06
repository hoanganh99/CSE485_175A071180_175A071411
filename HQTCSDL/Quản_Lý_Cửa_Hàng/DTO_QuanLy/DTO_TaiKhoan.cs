using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace DTO_QuanLy
{
    public class DTO_TaiKhoan
    {
        private string _Tentk;

        public string Tentk
        {
            get { return _Tentk; }
            set { _Tentk = value; }
        }
        private string _Matkhau;

        public string Matkhau
        {
            get { return _Matkhau; }
            set { _Matkhau = value; }
        }
        private string _Quyen;

        public string Quyen
        {
            get { return _Quyen; }
            set { _Quyen = value; }
        }
        private string _ID;

        public string ID
        {
            get { return _ID; }
            set { _ID = value; }
        }

    }
}
