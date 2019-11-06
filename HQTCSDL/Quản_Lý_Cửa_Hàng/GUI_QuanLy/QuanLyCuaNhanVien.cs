using BUS_QuanLy;
using DTO_QuanLy;
using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace GUI_QuanLy
{
    public partial class QuanLyCuaNhanVien : Form
    {
        public QuanLyCuaNhanVien()
        {
            InitializeComponent();
        }

        double soluong, dongiaban, tylegiamgia, tongtien;

        private string _manhanvien;
        public string manhanvien
        {
            set { _manhanvien = value; }
            get { return _manhanvien; }
        }



        private void label28_Click(object sender, EventArgs e)
        {

        }

        BUS_KhachHang bus_khachhang = new BUS_KhachHang();
        BUS_DonHang bus_donhang = new BUS_DonHang();
        BUS_SP_DonHang bus_sp_donhang = new BUS_SP_DonHang();

        //--------------------------------------------------------------------FORM LOAD-------------------------------------------------------------------------------------
        private void QuanLyCuaNhanVien_Load(object sender, EventArgs e)
        {
            cbb_gioitinh5.DropDownStyle = ComboBoxStyle.DropDownList;
            //khách hàng
            load_khachhang();
            dinhdangluoi1();
            reset_khachhang();

            //đơn hàng
            load_donhang();
            dinhdangluoi2();
            reset_donhang();

            //sp_donhang
            //cbb_iddonhang.DropDownStyle = ComboBoxStyle.DropDownList;
            //cbb_idsanpham.DropDownStyle = ComboBoxStyle.DropDownList;
            load_sp_donhang();
            dinhdangluoi4();
            reset_sp_donhang();

            label15.Text = tongtien.ToString();
            txt_manhanvien.Text = manhanvien;
        }

        //----------------------------------------------------------------------THỦ TỤC LOAD-----------------------------------------------------------------------------
        //khách hàng
        public void load_khachhang()
        {
            dataGridView1.DataSource = bus_khachhang.load_khachhang();
        }

        //đơn hàng
        public void load_donhang()
        {
            dataGridView2.DataSource = bus_donhang.load_donhang();
        }

        //sp đơn hàng
        public void load_sp_donhang()
        {
            dataGridView4.DataSource = bus_sp_donhang.load_sp_donhang();
        }

        //-------------------------------------------------------------------------LÀM TRẮNG------------------------------------------------------------------------
        //khách hàng
        public void reset_khachhang()
        {
            txt_id5.Clear();
            txt_hoten5.Clear();
            cbb_gioitinh5.SelectedIndex = -1;
            txt_diachi5.Clear();
            txt_email5.Clear();
            txt_sdt5.Clear();
        }

        //đơn hàng
        public void reset_donhang()
        {
            txt_iddonhang.Clear();
            cbb_idkhachhang.SelectedIndex = -1;          
            dt_ngaydathang.Value = DateTime.Today;
            dt_ngaygiaohang.Value = DateTime.Today;
            dt_ngayyeucauchuyen.Value = DateTime.Today;
            cbb_idctygiaohang.SelectedIndex = -1;
            txt_diachigiaohang.Clear();
        }

        //sp đơn hàng
        public void reset_sp_donhang()
        {
            cbb_iddonhang.SelectedIndex = -1;
            cbb_idsanpham.SelectedIndex = -1;
            txt_soluong.Clear();
            txt_dongiaban.Clear();
            txt_tylegiamgia.Clear();
        }

        //khách hàng
        private void dinhdangluoi1()
        {
            dataGridView1.ReadOnly = true;
            dataGridView1.Columns[0].HeaderText = "ID Khách Hàng";
            dataGridView1.Columns[1].HeaderText = "Họ Tên";
            dataGridView1.Columns[2].HeaderText = "Giới Tính";
            dataGridView1.Columns[3].HeaderText = "Địa Chỉ";
            dataGridView1.Columns[4].HeaderText = "Email";
            dataGridView1.Columns[5].HeaderText = "SĐT";
        }

        //đơn hàng
        private void dinhdangluoi2()
        {
            dataGridView2.ReadOnly = true;
            dataGridView2.Columns[0].HeaderText = "ID Đơn Hàng";
            dataGridView2.Columns[1].HeaderText = "ID khách Hàng";
            dataGridView2.Columns[2].HeaderText = "ID Nhân Viên";
            dataGridView2.Columns[3].HeaderText = "Ngày Đặt Hàng";
            dataGridView2.Columns[4].HeaderText = "Ngày Giao Hàng";
            dataGridView2.Columns[5].HeaderText = "Ngày Yêu Cầu Chuyển";
            dataGridView2.Columns[6].HeaderText = "ID Cty Giao Hàng";
            dataGridView2.Columns[7].HeaderText = "Địa Chỉ Giao Hàng";
        }

        //sp đơn hàng
        private void dinhdangluoi4()
        {
            dataGridView4.ReadOnly = true;
            dataGridView4.Columns[0].HeaderText = "ID Đơn Hàng";
            dataGridView4.Columns[1].HeaderText = "ID Sản Phẩm";
            dataGridView4.Columns[2].HeaderText = "ID Khách Hàng";
            dataGridView4.Columns[3].HeaderText = "Số Lượng";
            dataGridView4.Columns[4].HeaderText = "Đơn Giá Bán";
            dataGridView4.Columns[5].HeaderText = "Tỷ Lệ Giảm Giá";
        }

        //-----------------------------------------------------------------------XEM DỮ LIỆU------------------------------------------------------------------------------
        //khách hàng
        private void dataGridView1_RowEnter_1(object sender, DataGridViewCellEventArgs e)
        {
            int dong = e.RowIndex;
            txt_id5.Text = dataGridView1.Rows[dong].Cells[0].Value.ToString();
            txt_hoten5.Text = dataGridView1.Rows[dong].Cells[1].Value.ToString();
            cbb_gioitinh5.Text = dataGridView1.Rows[dong].Cells[2].Value.ToString();
            txt_diachi5.Text = dataGridView1.Rows[dong].Cells[3].Value.ToString();
            txt_email5.Text = dataGridView1.Rows[dong].Cells[4].Value.ToString();
            txt_sdt5.Text = dataGridView1.Rows[dong].Cells[5].Value.ToString();
        }

        //đơn hàng
        private void dataGridView2_RowEnter(object sender, DataGridViewCellEventArgs e)
        {
            
        }
        private void dataGridView2_RowEnter_1(object sender, DataGridViewCellEventArgs e)
        {
            int dong = e.RowIndex;
            txt_iddonhang.Text = dataGridView2.Rows[dong].Cells[0].Value.ToString();
            cbb_idkhachhang.Text = dataGridView2.Rows[dong].Cells[1].Value.ToString();
            txt_manhanvien.Text = dataGridView2.Rows[dong].Cells[2].Value.ToString();
            dt_ngaydathang.Text = dataGridView2.Rows[dong].Cells[3].Value.ToString();
            dt_ngaygiaohang.Text = dataGridView2.Rows[dong].Cells[4].Value.ToString();
            dt_ngayyeucauchuyen.Text = dataGridView2.Rows[dong].Cells[5].Value.ToString();
            cbb_idctygiaohang.Text = dataGridView2.Rows[dong].Cells[6].Value.ToString();
            txt_diachigiaohang.Text = dataGridView2.Rows[dong].Cells[7].Value.ToString();
        }

        //sp đơn hàng
        private void dataGridView4_RowEnter(object sender, DataGridViewCellEventArgs e)
        {
            int dong = e.RowIndex;
            cbb_iddonhang.Text = dataGridView4.Rows[dong].Cells[0].Value.ToString();
            cbb_idsanpham.Text = dataGridView4.Rows[dong].Cells[1].Value.ToString();
            cbb_idkh.Text = dataGridView4.Rows[dong].Cells[2].Value.ToString();
            txt_soluong.Text = dataGridView4.Rows[dong].Cells[3].Value.ToString();          
            txt_dongiaban.Text = dataGridView4.Rows[dong].Cells[4].Value.ToString();
            txt_tylegiamgia.Text = dataGridView4.Rows[dong].Cells[5].Value.ToString();


            soluong = double.Parse(dataGridView4.Rows[dong].Cells[3].Value.ToString());
            dongiaban = double.Parse(dataGridView4.Rows[dong].Cells[4].Value.ToString());
            tylegiamgia = double.Parse(dataGridView4.Rows[dong].Cells[5].Value.ToString());

            tongtien = Math.Round((soluong * dongiaban) - (soluong * dongiaban * tylegiamgia / 100));
            label15.Text = tongtien.ToString();
        }

        //----------------------------------------------------------------------NÚT CHỨC NĂNG---------------------------------------------------------------------
        //Nút chức năng của khách hàng
        private void but_them5_Click(object sender, EventArgs e)
        {
            
        }
        private void but_them5_Click_1(object sender, EventArgs e)
        {
            if (txt_id5.TextLength == 0)
            {
                MessageBox.Show("Chưa nhập ID khách hàng");
            }
            else if (txt_hoten5.TextLength == 0)
            {
                MessageBox.Show("Chưa nhập tên công ty");
            }
            else if (cbb_gioitinh5.Text == "")
            {
                MessageBox.Show("Chưa chọn Giới Tính");
            }
            else if (txt_diachi5.TextLength == 0)
            {
                MessageBox.Show("Chưa nhập địa chỉ");
            }
            else if (txt_email5.TextLength == 0)
            {
                MessageBox.Show("Chưa nhập email");
            }
            else if (txt_sdt5.TextLength == 0)
            {
                MessageBox.Show("Chưa nhập số điện thoại");
            }

            else
            {
                DTO_KhachHang dto_khachhang = new DTO_KhachHang();

                dto_khachhang.idkhachhang = txt_id5.Text;
                dto_khachhang.hoten = txt_hoten5.Text;
                dto_khachhang.gioitinh = cbb_gioitinh5.Text;
                dto_khachhang.diachi = txt_diachi5.Text;
                dto_khachhang.email = txt_email5.Text;
                dto_khachhang.sodienthoai = txt_sdt5.Text;

                BUS_KhachHang bus_khachhang = new BUS_KhachHang();
                bus_khachhang.insert_khachhang(dto_khachhang);

                QuanLyCuaNhanVien_Load(sender, e);
                reset_khachhang();
            }
        }
        private void but_sua5_Click(object sender, EventArgs e)
        {
            DTO_KhachHang dto_khachhang = new DTO_KhachHang();

            dto_khachhang.idkhachhang = txt_id5.Text;
            dto_khachhang.hoten = txt_hoten5.Text;
            dto_khachhang.gioitinh = cbb_gioitinh5.Text;
            dto_khachhang.diachi = txt_diachi5.Text;
            dto_khachhang.email = txt_email5.Text;
            dto_khachhang.sodienthoai = txt_sdt5.Text;

            BUS_KhachHang bus_khachhang = new BUS_KhachHang();
            bus_khachhang.update_khachhang(dto_khachhang);

            QuanLyCuaNhanVien_Load(sender, e);
            reset_khachhang();
        }

        private void but_xoa5_Click_1(object sender, EventArgs e)
        {
            DTO_SP_DonHang dto_sp_donhang = new DTO_SP_DonHang();
            DTO_DonHang dto_donhang = new DTO_DonHang();
            DTO_KhachHang dto_khachhang = new DTO_KhachHang();

            BUS_KhachHang bus_khachhang = new BUS_KhachHang();
            BUS_DonHang bus_donhang = new BUS_DonHang();
            BUS_SP_DonHang bus_sp_donhang = new BUS_SP_DonHang();

            dto_sp_donhang.idkhachhang = txt_id5.Text;
            dto_donhang.idkhachhang = txt_id5.Text;
            dto_khachhang.idkhachhang = txt_id5.Text;

            bus_sp_donhang.delete_sp_donhang_idkhachhang(dto_sp_donhang);
            bus_donhang.delete_donhang_idkhachhang(dto_donhang);
            bus_khachhang.delete_khachhang(dto_khachhang);

            QuanLyCuaNhanVien_Load(sender, e);
            reset_khachhang();
        }

        private void but_lammoi5_Click(object sender, EventArgs e)
        {
            reset_khachhang();
        }

        private void but_thoat5_Click(object sender, EventArgs e)
        {
            DangNhap dn = new DangNhap();
            this.Hide();
            dn.ShowDialog();
        }

        private void dataGridView1_CellContentClick(object sender, DataGridViewCellEventArgs e)
        {

        }

        private void textBox1_TextChanged(object sender, EventArgs e)
        {

        }


        //Nút chức năng của đơn hàng

        private void btt_them_Click(object sender, EventArgs e)
        {
            if (txt_iddonhang.TextLength == 0)
            {
                MessageBox.Show("Chưa nhập ID đơn hàng");
            }
            else if (cbb_idkhachhang.DropDownHeight == 0)
            {
                MessageBox.Show("Chưa nhập ID khách hàng");
            }
           
            else if (dt_ngaydathang.Value.Day > DateTime.Today.Day && dt_ngaydathang.Value.Month > DateTime.Today.Month && dt_ngaydathang.Value.Year > DateTime.Today.Year)
            {
                MessageBox.Show("Chưa chọn ngày đặt hàng");
            }
            else if (dt_ngaygiaohang.Value.Day > DateTime.Today.Day && dt_ngaygiaohang.Value.Month > DateTime.Today.Month && dt_ngaygiaohang.Value.Year > DateTime.Today.Year)
            {
                MessageBox.Show("Chưa chọn ngày giao hàng");
            }
            else if (dt_ngayyeucauchuyen.Value.Day > DateTime.Today.Day && dt_ngayyeucauchuyen.Value.Month > DateTime.Today.Month && dt_ngayyeucauchuyen.Value.Year > DateTime.Today.Year)
            {
                MessageBox.Show("Chưa chọn ngày yêu cầu chuyển");
            }
            else if (cbb_idctygiaohang.DropDownHeight== 0)
            {
                MessageBox.Show("Chưa chọn công ty giao hàng giao hàng");
            }
            else if (txt_diachigiaohang.TextLength == 0)
            {
                MessageBox.Show("Chưa nhập địa chỉ giao hàng");
            }
            else
            {
                    DTO_DonHang dto_donhang = new DTO_DonHang();
                    dto_donhang.iddonhang = txt_iddonhang.Text;
                    dto_donhang.idkhachhang = cbb_idkhachhang.Text;
                    dto_donhang.idnhanvien = txt_manhanvien.Text;
                    dto_donhang.ngaydathang = DateTime.Parse(dt_ngaydathang.Text);
                    dto_donhang.ngaygiaohang = DateTime.Parse(dt_ngaygiaohang.Text);
                    dto_donhang.ngayyeucauchuyen = DateTime.Parse(dt_ngayyeucauchuyen.Text);
                    dto_donhang.idcty = cbb_idctygiaohang.Text;
                    dto_donhang.diachigiaohang = txt_diachigiaohang.Text;

                    BUS_DonHang bus_donhang = new BUS_DonHang();
                    bus_donhang.insert_donhang(dto_donhang);

                    QuanLyCuaNhanVien_Load(sender, e);
                    reset_donhang();
                
              
            }
        }

        private void but_sua_Click(object sender, EventArgs e)
        {
            DTO_DonHang dto_donhang = new DTO_DonHang();
            dto_donhang.iddonhang = txt_iddonhang.Text;
            dto_donhang.diachigiaohang = txt_diachigiaohang.Text;
            dto_donhang.idkhachhang = cbb_idkhachhang.Text;
            dto_donhang.idnhanvien = txt_manhanvien.Text;
            dto_donhang.ngaydathang = DateTime.Parse(dt_ngaydathang.Text);
            dto_donhang.ngaygiaohang = DateTime.Parse(dt_ngaygiaohang.Text);
            dto_donhang.ngayyeucauchuyen = DateTime.Parse(dt_ngayyeucauchuyen.Text);
            dto_donhang.idcty = cbb_idctygiaohang.Text;
            dto_donhang.diachigiaohang = txt_diachigiaohang.Text;

            BUS_DonHang bus_donhang = new BUS_DonHang();
            bus_donhang.update_donhang(dto_donhang);

            QuanLyCuaNhanVien_Load(sender, e);
            reset_donhang();
        }

        private void but_xoa_Click(object sender, EventArgs e)
        {
            DTO_SP_DonHang dto_sp_donhang = new DTO_SP_DonHang();
            DTO_DonHang dto_donhang = new DTO_DonHang();
            dto_donhang.iddonhang = txt_iddonhang.Text;
            dto_sp_donhang.iddonhang = txt_iddonhang.Text;         

            BUS_DonHang bus_donhang = new BUS_DonHang();
            BUS_SP_DonHang bus_sp_donhang = new BUS_SP_DonHang();

            bus_sp_donhang.delete_sp_donhang1(dto_sp_donhang);
            bus_donhang.delete_donhang(dto_donhang);

            

            QuanLyCuaNhanVien_Load(sender, e);
            reset_donhang();
        }

        private void but_lammoi_Click(object sender, EventArgs e)
        {
            reset_donhang();
        }

        private void but_thoat_Click(object sender, EventArgs e)
        {
            DangNhap dn = new DangNhap();
            this.Hide();
            dn.ShowDialog();
        }

        private void cbb_idkhachhang_Click(object sender, EventArgs e)
        {
           
        }

        private void cbb_idnhanvien_Click(object sender, EventArgs e)
        {
           
        }
        //lấy đc dl đã có từ trước
        private void cbb_idctygiaohang_Click(object sender, EventArgs e)
        {
            BUS_DonHang bus_donhang = new BUS_DonHang();
            cbb_idctygiaohang.DataSource = bus_donhang.view_load_idctygiaohang();

            cbb_idctygiaohang.DisplayMember = "idcty";
        }
        private void comboBox1_Click(object sender, EventArgs e)
        {
            BUS_DonHang bus_donhang = new BUS_DonHang();
            cbb_idkhachhang.DataSource = bus_donhang.view_load_idkhachang();

            cbb_idkhachhang.DisplayMember = "idkhachhang";
        }

        //Nút chức năng  của sp đơn hàng
        private void dataGridView3_CellContentClick(object sender, DataGridViewCellEventArgs e)
        {

        }
        private void groupBox7_Enter(object sender, EventArgs e)
        {

        }

        private void but_them31_Click(object sender, EventArgs e)
        {
           if (cbb_iddonhang.DropDownHeight == 0)
            {
                MessageBox.Show("Chưa chọn id đơn hàng");
            }
            else if (cbb_idsanpham.DropDownHeight == 0)
            {
                MessageBox.Show("Chưa chọn id sản phẩm");
            }
            else if (cbb_idkh.DropDownHeight == 0)
            {
                MessageBox.Show("Chưa chọn id khách hàng");
            }
            else if (txt_soluong.TextLength == 0)
            {
                MessageBox.Show("Chưa nhập số lượng");
            }
            else if (txt_dongiaban.TextLength == 0)
            {
                MessageBox.Show("Chưa nhập đơn giá bán");
            }
            else if (txt_tylegiamgia.TextLength == 0)
            {
                MessageBox.Show("Chưa nhập tỷ lệ giảm giá");
            }
            else
            {
                DTO_SP_DonHang dto_sp_donhang = new DTO_SP_DonHang();
                dto_sp_donhang.iddonhang = cbb_iddonhang.Text;
                dto_sp_donhang.idsanpham = cbb_idsanpham.Text;
                dto_sp_donhang.idkhachhang = cbb_idkh.Text;
                dto_sp_donhang.soluong = txt_soluong.Text;
                dto_sp_donhang.dongiaban = txt_dongiaban.Text;
                dto_sp_donhang.tylegiamgia = txt_tylegiamgia.Text;

                BUS_SP_DonHang bus_sp_donhang = new BUS_SP_DonHang();
                bus_sp_donhang.insert_sp_donhang(dto_sp_donhang);

                QuanLyCuaNhanVien_Load(sender, e);
                reset_sp_donhang();
            }
        }

        private void but_sua31_Click(object sender, EventArgs e)
        {
            DTO_SP_DonHang dto_sp_donhang = new DTO_SP_DonHang();
            dto_sp_donhang.iddonhang = cbb_iddonhang.Text;
            dto_sp_donhang.idsanpham = cbb_idsanpham.Text;
            dto_sp_donhang.idkhachhang = cbb_idkh.Text;
            dto_sp_donhang.soluong = txt_soluong.Text;
            dto_sp_donhang.dongiaban = txt_dongiaban.Text;
            dto_sp_donhang.tylegiamgia = txt_tylegiamgia.Text;

            BUS_SP_DonHang bus_sp_donhang = new BUS_SP_DonHang();
            bus_sp_donhang.update_sp_donhang(dto_sp_donhang);

            QuanLyCuaNhanVien_Load(sender, e);
            reset_sp_donhang();
        }

        private void bt_xoa_Click(object sender, EventArgs e)
        {
            DTO_SP_DonHang dto_sp_donhang = new DTO_SP_DonHang();
            dto_sp_donhang.iddonhang = cbb_iddonhang.Text;
            dto_sp_donhang.idsanpham = cbb_idsanpham.Text;
       //     dto_sp_donhang.idkhachhang = cbb_idkh.Text;

            BUS_SP_DonHang bus_sp_donhang = new BUS_SP_DonHang();
            bus_sp_donhang.delete_sp_donhang(dto_sp_donhang);

            QuanLyCuaNhanVien_Load(sender, e);
            reset_sp_donhang();
        }

        private void lammoi_Click(object sender, EventArgs e)
        {
            reset_khachhang();
        }

        private void but_thoat31_Click(object sender, EventArgs e)
        {
            DangNhap dn = new DangNhap();
            this.Hide();
            dn.ShowDialog();
        }

        private void comboBox2_Click(object sender, EventArgs e)
        {
           
        }
        private void cbb_idkh_SelectedIndexChanged(object sender, EventArgs e)
        {

        }
        private void cbb_iddonhang_SelectedIndexChanged(object sender, EventArgs e)
        {

        }

        //lấy dl đã có từ trước
        private void cbb_iddonhang_Click(object sender, EventArgs e)
        {
            BUS_SP_DonHang bus_sp_donhang = new BUS_SP_DonHang();
            cbb_iddonhang.DataSource = bus_sp_donhang.view_iddonhang();

            cbb_iddonhang.DisplayMember = "iddonhang";
        }
        private void cbb_idsanpham_Click(object sender, EventArgs e)
        {
            BUS_SP_DonHang bus_sp_donhang = new BUS_SP_DonHang();
            cbb_idsanpham.DataSource = bus_sp_donhang.view_idsanpham();

            cbb_idsanpham.DisplayMember = "idsanpham";
        }
        private void cbb_idkh_Click(object sender, EventArgs e)
        {
            BUS_SP_DonHang bus_sp_donhang = new BUS_SP_DonHang();
            cbb_idkh.DataSource = bus_sp_donhang.view_idkhachhang();

            cbb_idkh.DisplayMember = "idkhachhang";
        }
    }
}
