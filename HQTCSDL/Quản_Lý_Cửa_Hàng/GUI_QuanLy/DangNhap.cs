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
    public partial class DangNhap : Form
    {
        public DangNhap()
        {
            InitializeComponent();
        }

        private void DangNhap_Load(object sender, EventArgs e)
        {

        }
        BUS_TaiKhoan taikhoan_bus = new BUS_TaiKhoan(); 
        private void bt_dangnhap_Click(object sender, EventArgs e)
        {
            if (txt_taikhoan.TextLength == 0)
            {
                lbtrangthai.ForeColor = Color.Red;
                lbtrangthai.Text = "Chưa điền tên tài khoản.";
               
                txt_taikhoan.Focus();
            }
            else if (txt_matkhau.TextLength == 0)
            {
                lbtrangthai.ForeColor = Color.Red;
                lbtrangthai.Text = "Chưa điền mật khẩu.";              
                txt_matkhau.Focus();
            }
            else
            {
                DTO_TaiKhoan dto_taikhoan = new DTO_TaiKhoan();
                dto_taikhoan.Tentk = txt_taikhoan.Text;
                dto_taikhoan.Matkhau= txt_matkhau.Text;
                int trangthaitaikhoan = 0;
                trangthaitaikhoan = taikhoan_bus.check_dangnhap(dto_taikhoan);
                string check_quyen = "";

                if (trangthaitaikhoan == 1)
                {
                    check_quyen = taikhoan_bus.check_quyen_taikhoan(dto_taikhoan);
                    if (check_quyen == "admin")
                    {
                        Quan_Ly ql = new Quan_Ly();
                        this.Hide();
                        ql.ShowDialog(); 
                    }
                    else
                    {
                        BUS_TaiKhoan bus_taikhoan = new BUS_TaiKhoan();
                        QuanLyCuaNhanVien qlcnv = new QuanLyCuaNhanVien();
                        this.Hide();
                        qlcnv.manhanvien = bus_taikhoan.load_id_taikhoan(dto_taikhoan);
                        qlcnv.ShowDialog();
                       
                    }
                }

                else if (trangthaitaikhoan == 0)
                {
                    lbtrangthai.ForeColor = Color.Red;
                    lbtrangthai.Text = "Sai tên tài khoản hoặc mật khẩu.";
                    txt_taikhoan.Focus();
                }
            }
        }

        private void bt_thoat_Click(object sender, EventArgs e)
        {
            DialogResult thong_bao;
            thong_bao = (MessageBox.Show("Bạn có muốn thoát không ?", "Thông báo", MessageBoxButtons.YesNo, MessageBoxIcon.Question));
            if (thong_bao == DialogResult.Yes)
            Application.Exit();
        }

        private void checkBox1_CheckedChanged(object sender, EventArgs e)
        {
            if (checkBox1.Checked)
            {
                txt_matkhau.UseSystemPasswordChar = true;
            }
            else
            {
                txt_matkhau.UseSystemPasswordChar = false;
            }
        }

        private void txt_taikhoan_TextChanged(object sender, EventArgs e)
        {
      
        }

        private void button1_Click(object sender, EventArgs e)
        {
            DangKy dk = new DangKy();
            this.Hide(); 
            dk.ShowDialog(); 
        }
    }
}
