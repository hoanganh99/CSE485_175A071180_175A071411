using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using DTO_QuanLy;
using BUS_QuanLy;
namespace GUI_QuanLy
{
    public partial class DangKy : Form
    {
        public DangKy()
        {
            InitializeComponent();
        }

        private void label10_Click(object sender, EventArgs e)
        {

        }

        private void DangKy_Load(object sender, EventArgs e)
        {
            cbb_gt.DropDownStyle = ComboBoxStyle.DropDownList;
            txt_luong.Text = "1000000";
            txt_luong.Enabled = false;
        }

        BUS_NhanVien nhanvien_bus = new BUS_NhanVien();
        BUS_TaiKhoan taikhoan_bus = new BUS_TaiKhoan();


        public void reset()
        {
            txt_tk.Clear();
            txt_mk.Clear();
            txt_ten.Clear();
            txt_maso.Clear();
            txt_diachi.Clear();
            txt_email.Clear();
            txt_sdt.Clear();
            cbb_gt.SelectedIndex = -1;
            dt_ngaysinh.Value = DateTime.Today;
            dt_ngaydilam.Value = DateTime.Today;
        }

        private void bt_dangki_Click(object sender, EventArgs e)
        {
            if(txt_tk.TextLength ==0 )
            {
                MessageBox.Show("Chưa nhập tài khoản");
            }
            else if (txt_mk.TextLength == 0)
            {
                MessageBox.Show("Chưa nhập mật khẩu");
            }
            else if (txt_mk.TextLength < 6 || txt_mk.TextLength > 20)
            {
                MessageBox.Show("Mật khẩu phải lớn hơn 6 và nhỏ hơn 20 ký tự");
            }

            else
            {
                DTO_TaiKhoan dto_taikhoan = new DTO_TaiKhoan();
                dto_taikhoan.Tentk = txt_tk.Text; 
                dto_taikhoan.Matkhau = txt_mk.Text;
                dto_taikhoan.ID = txt_maso.Text;

                DTO_NhanVien dto_nhanvien = new DTO_NhanVien();
                dto_nhanvien.idnhanvien = txt_maso.Text;
                dto_nhanvien.hoten = txt_ten.Text;
                dto_nhanvien.ngaysinh = DateTime.Parse(dt_ngaysinh.Text);
                dto_nhanvien.gioitinh = cbb_gt.Text;
                dto_nhanvien.ngaybatdaulam = DateTime.Parse(dt_ngaydilam.Text);
                dto_nhanvien.diachi = txt_diachi.Text;
                dto_nhanvien.email = txt_email.Text;
                dto_nhanvien.sdt = txt_sdt.Text;
                dto_nhanvien.luong = txt_luong.Text;

                int check_cmnd = 0;
                int checktrungtk = 0;
                check_cmnd = nhanvien_bus.checkdky(dto_nhanvien);
                checktrungtk = taikhoan_bus.check_taikhoan(dto_taikhoan);
                if (radioButton2.Checked == true)
                {
                    dto_taikhoan.Quyen = "Nhanvien"; 
                    if (txt_maso.TextLength == 0)
                    {
                        MessageBox.Show("Chưa nhập Mã Nhân Viên");
                    }
                    else if (radioButton1.Checked == false && radioButton2.Checked == false)
                    {
                        MessageBox.Show("Chưa chọn quyền");
                    }
                    else if (txt_ten.TextLength == 0)
                    {
                        MessageBox.Show("Chưa nhập Họ Tên");
                    }
                    else if (txt_diachi.TextLength == 0)
                    {
                        MessageBox.Show("Chưa nhập Quê Quán");
                    }
                    else if (dt_ngaysinh.Value.Day == DateTime.Today.Day && dt_ngaysinh.Value.Month == DateTime.Today.Month && dt_ngaysinh.Value.Year == DateTime.Today.Year)
                    {
                        MessageBox.Show("Chưa chọn Ngày Sinh");
                    }
                    else if (cbb_gt.Text == "")
                    {
                        MessageBox.Show("Chưa chọn Giới Tính");
                    }
                    else if (dt_ngaydilam.Value.Day > DateTime.Today.Day && dt_ngaydilam.Value.Month > DateTime.Today.Month && dt_ngaydilam.Value.Year > DateTime.Today.Year)
                    {
                        MessageBox.Show("Chưa chọn Ngày Làm");
                    }
                    else if (txt_luong.TextLength == 0)
                    {
                        MessageBox.Show("Chưa nhập Lương");
                    }
                    else if (txt_email.TextLength == 0)
                    {
                        MessageBox.Show("Chưa nhập email");
                    }
                    else if (txt_sdt.TextLength == 0)
                    {
                        MessageBox.Show("Chưa nhập số điện thoại");
                    }
                    else if (check_cmnd == 1)
                    {
                        MessageBox.Show("Trùng Số CMND! Vui lòng nhập lại");
                    }
                    else if (checktrungtk ==1)
                    {
                        MessageBox.Show("Tài khoản này đã có! Vui lòng chọn tài khoản khác");
                    }
                    else
                    {
                        taikhoan_bus.insert_taikhoan(dto_taikhoan);
                        nhanvien_bus.insert_nhanvien(dto_nhanvien);
                        MessageBox.Show("Đăng ký thành công");
                        reset(); 
                    }  

                }
                else if (radioButton1.Checked == true)
                {
                    if (checktrungtk == 1)
                    {
                        MessageBox.Show("Tài khoản này đã có! Vui lòng chọn tài khoản khác");
                    }
                    else
                    {
                        dto_taikhoan.Quyen = "admin";
                        taikhoan_bus.insert_taikhoan(dto_taikhoan);
                        MessageBox.Show("Đăng ký thành công");
                        reset();
                    }
                }

            }
        }

        private void radioButton1_CheckedChanged(object sender, EventArgs e) 
        {
            txt_ten.Enabled = false;
            dt_ngaysinh.Enabled = false;
            cbb_gt.Enabled = false;
            dt_ngaydilam.Enabled = false;
            txt_diachi.Enabled = false;
            txt_email.Enabled = false;
            txt_sdt.Enabled = false;
            txt_luong.Enabled = false;
        }

        private void radioButton2_CheckedChanged(object sender, EventArgs e)
        {
            txt_maso.Enabled = true; 
            txt_ten.Enabled = true;
            dt_ngaysinh.Enabled = true;
            cbb_gt.Enabled = true;
            dt_ngaydilam.Enabled = true;
            txt_diachi.Enabled = true;
            txt_email.Enabled = true;
            txt_sdt.Enabled = true;
        }

       
        private void bt_trolai_Click(object sender, EventArgs e)
        {
            DangNhap dn = new DangNhap();
            this.Hide();
            dn.ShowDialog();
        }

        private void txt_tk_TextChanged(object sender, EventArgs e)
        {

        }
    }
}
