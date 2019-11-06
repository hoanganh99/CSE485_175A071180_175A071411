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
using System.Threading;

namespace GUI_QuanLy
{
    public partial class Quan_Ly : Form
    {
        public Quan_Ly()
        {
            InitializeComponent();
        }

        BUS_NhanVien nhanvien_bus = new BUS_NhanVien();
        BUS_LoaiHang bus_loaihang = new BUS_LoaiHang();
        BUS_NhaCungCap bus_nhacungcap = new BUS_NhaCungCap();
        BUS_CongTyGiaoHang bus_congtygiaohang = new BUS_CongTyGiaoHang();
        BUS_SanPham bus_sanpham = new BUS_SanPham();
  
        //------------------------------------------------------------------FORM LOAD---------------------------------------------------------------------------------------
        private void Quan_Ly_Load(object sender, EventArgs e)
        {
            //nhân viên
            cbb_gt.DropDownStyle = ComboBoxStyle.DropDownList;
            load_nhanvien();
            dinhdangluoi();
            reset();

            //loại hàng
            load_loaihang();
            dinhdangluoi2();
            reset_loaihang();

            //nhà cung cấp
            load_nhacungcap();
            dinhdangluoi3();
            reset_nhacungcap();

            //công ty giao hàng
            load_ctygiaohang();
            dinhdangluoi5();
            reset_ctygiaohang();

            //sản phẩm
          
            load_sanpham();
            dinhdangluoi6();
            reset_sanpham();
        }

        //-----------------------------------------------------------------HÀM LOAD / THỦ TỤC LOAD------------------------------------------------------------------------
        //nhân viên
        public void load_nhanvien()
        {
            //  dataGridView1.DataSource = nhanvien_bus.load_nhanvien(); //dùng thủ tục
            dataGridView1.DataSource = nhanvien_bus.load_nhanvien_fc(); //dùng hàm
        }

        //loại hàng
        public void load_loaihang()
        {
            //dataGridView3.DataSource = bus_loaihang.load_loaihang();//dùng thủ tục
            dataGridView3.DataSource = bus_loaihang.load_loaihangfc();//dùng hàm
        }

        //nhà cung cấp
        public void load_nhacungcap()
        {
            //dataGridView2.DataSource = bus_nhacungcap.load_nhacungcap();//dùng thủ tục
            dataGridView2.DataSource = bus_nhacungcap.load_nhacungcap_fc();//dùng hàm
        }
        //công ty giao hàng
        public void load_ctygiaohang()
        {
            dataGridView4.DataSource = bus_congtygiaohang.load_ctygiaohang();
        }
        //sản phẩm
        public void load_sanpham()
        {
            dataGridView5.DataSource = bus_sanpham.load_sanpham();
        }

        //--------------------------------------------------------------------LÀM TRẮNG------------------------------------------------------------
        //nhân viên
        public void reset()
        {
            txt_maso.Clear();
            txt_ten.Clear();
            txt_diachi.Clear();
            txt_luong.Clear();
            txt_email.Clear();
            txt_sdt.Clear();
            cbb_gt.SelectedIndex = -1;
            dt_ngaysinh.Value = DateTime.Today;
            dt_ngaylam.Value = DateTime.Today;
        }
        //loại hàng
        public void reset_loaihang()
        {
            txt_idloaihang.Clear();
            txt_tenloaihang.Clear();
            txt_mota.Clear();
        }
        //nhà cung cấp
        public void reset_nhacungcap()
        {
            txt_idnhacungcap.Clear();
            txt_tencongty.Clear();
            txt_diachiNCC.Clear();
            txt_sđt.Clear();
            txt_website.Clear();
            txt_congiaodich.Clear();
        }

        //công ty giao hàng
        public void reset_ctygiaohang()
        {
            txt_idcty.Clear();
            txt_tenctygiaohang.Clear();
            txt_sđtctygiaohang.Clear();
            txt_diachictygiaohang.Clear();
        }

        //sản phẩm 
        public void reset_sanpham()
        {
            txt_idsp6.Clear();
            txt_tensp6.Clear();
            cbb_idncc.SelectedIndex = -1;
            cbb_idlh.SelectedIndex = -1;
            txt_dongianhap6.Clear();
            txt_soluongcon6.Clear();
            txt_slccc6.Clear();
            txt_mota61.Clear();
            txt_nb6.Clear();
        }


        //---------------------------------------------------------------------ĐỊNH DẠNG LƯỚI--------------------------------------------------------------------------
        //nhân viên
        private void dinhdangluoi()
        {
            dataGridView1.ReadOnly = true;
            dataGridView1.Columns[0].HeaderText = "ID Nhân Viên";
            dataGridView1.Columns[1].HeaderText = "Họ Tên";
            dataGridView1.Columns[2].HeaderText = "Ngày Sinh";
            dataGridView1.Columns[3].HeaderText = "Giới Tính";
            dataGridView1.Columns[4].HeaderText = "Ngày BD Làm";
            dataGridView1.Columns[5].HeaderText = "Địa Chỉ";
            dataGridView1.Columns[6].HeaderText = "Emai";
            dataGridView1.Columns[7].HeaderText = "SDT";
            dataGridView1.Columns[8].HeaderText = "Lương";
        }
        //loại hàng
        private void dinhdangluoi2()
        {
            dataGridView3.ReadOnly = true;
            dataGridView3.Columns[0].HeaderText = "ID Loại Hàng";
            dataGridView3.Columns[1].HeaderText = "Tên Loại Hàng";
            dataGridView3.Columns[2].HeaderText = "Mô tả";

        }
        //nhà cung cấp
        private void dinhdangluoi3()
        {
            dataGridView2.ReadOnly = true;
            dataGridView2.Columns[0].HeaderText = "ID Nhà Cung Cấp";
            dataGridView2.Columns[1].HeaderText = "Tên Công Ty";
            dataGridView2.Columns[2].HeaderText = "Địa Chỉ";
            dataGridView2.Columns[3].HeaderText = "SĐT";
            dataGridView2.Columns[4].HeaderText = "Website";
            dataGridView2.Columns[5].HeaderText = "Còn Giao Dịch";
        }

        //công ty giao hàng
        private void dinhdangluoi5()
        {
            dataGridView4.ReadOnly = true;
            dataGridView4.Columns[0].HeaderText = "ID Công Ty Giao Hàng";
            dataGridView4.Columns[1].HeaderText = "Tên Công Ty";
            dataGridView4.Columns[2].HeaderText = "Số Điện Thoại";
            dataGridView4.Columns[3].HeaderText = "Địa Chỉ";
        }

        //sản phẩm 
        private void dinhdangluoi6()
        {
            dataGridView5.ReadOnly = true;
            dataGridView5.Columns[0].HeaderText = "ID Sản Phẩm";
            dataGridView5.Columns[1].HeaderText = "Tên Sản Phẩm";
            dataGridView5.Columns[2].HeaderText = "ID Nhà Cung Cấp";
            dataGridView5.Columns[3].HeaderText = "ID Loại Hàng";
            dataGridView5.Columns[4].HeaderText = "Đơn Giá Nhập";
            dataGridView5.Columns[5].HeaderText = "Số Lượng Còn";
            dataGridView5.Columns[6].HeaderText = "Số Lường Chờ Cung Cấp";
            dataGridView5.Columns[7].HeaderText = "Mô Tả";
            dataGridView5.Columns[8].HeaderText = "Ngừng Bán";
        }



        //------------------------------------------------------------------XEM DỮ LIỆU----------------------------------------------------------------------------------
        //nhân viên
        private void dataGridView1_RowEnter_1(object sender, DataGridViewCellEventArgs e)
        {
            int dong = e.RowIndex;
            txt_maso.Text = dataGridView1.Rows[dong].Cells[0].Value.ToString();
            txt_ten.Text = dataGridView1.Rows[dong].Cells[1].Value.ToString();
            dt_ngaysinh.Text = dataGridView1.Rows[dong].Cells[2].Value.ToString();
            cbb_gt.Text = dataGridView1.Rows[dong].Cells[3].Value.ToString();
            dt_ngaylam.Text = dataGridView1.Rows[dong].Cells[4].Value.ToString();
            txt_diachi.Text = dataGridView1.Rows[dong].Cells[5].Value.ToString();
            txt_email.Text = dataGridView1.Rows[dong].Cells[6].Value.ToString();
            txt_sdt.Text = dataGridView1.Rows[dong].Cells[7].Value.ToString();
            txt_luong.Text = dataGridView1.Rows[dong].Cells[8].Value.ToString();
        }
        //loại hàng
        private void dataGridView3_RowEnter(object sender, DataGridViewCellEventArgs e)
        {
            int dong = e.RowIndex;
            txt_idloaihang.Text = dataGridView3.Rows[dong].Cells[0].Value.ToString();
            txt_tenloaihang.Text = dataGridView3.Rows[dong].Cells[1].Value.ToString();
            txt_mota.Text = dataGridView3.Rows[dong].Cells[2].Value.ToString();
        }
        //nhà cung cấp
        private void dataGridView2_RowEnter(object sender, DataGridViewCellEventArgs e)
        {
            int dong = e.RowIndex;
            txt_idnhacungcap.Text = dataGridView2.Rows[dong].Cells[0].Value.ToString();
            txt_tencongty.Text = dataGridView2.Rows[dong].Cells[1].Value.ToString();
            txt_diachiNCC.Text = dataGridView2.Rows[dong].Cells[2].Value.ToString();
            txt_sđt.Text = dataGridView2.Rows[dong].Cells[3].Value.ToString();
            txt_website.Text = dataGridView2.Rows[dong].Cells[4].Value.ToString();
            txt_congiaodich.Text = dataGridView2.Rows[dong].Cells[5].Value.ToString();
        }
        //công ty giao hàng
        private void dataGridView4_RowEnter(object sender, DataGridViewCellEventArgs e)
        {
            int dong = e.RowIndex;
            txt_idcty.Text = dataGridView4.Rows[dong].Cells[0].Value.ToString();
            txt_tenctygiaohang.Text = dataGridView4.Rows[dong].Cells[1].Value.ToString();
            txt_sđtctygiaohang.Text = dataGridView4.Rows[dong].Cells[2].Value.ToString();
            txt_diachictygiaohang.Text = dataGridView4.Rows[dong].Cells[3].Value.ToString();
        }
        //sản phẩm
        private void dataGridView5_RowEnter(object sender, DataGridViewCellEventArgs e)
        {
            int dong = e.RowIndex;
            txt_idsp6.Text = dataGridView5.Rows[dong].Cells[0].Value.ToString();
            txt_tensp6.Text = dataGridView5.Rows[dong].Cells[1].Value.ToString();
            cbb_idncc.Text = dataGridView5.Rows[dong].Cells[2].Value.ToString();
            cbb_idlh.Text = dataGridView5.Rows[dong].Cells[3].Value.ToString();
            txt_dongianhap6.Text = dataGridView5.Rows[dong].Cells[4].Value.ToString();
            txt_soluongcon6.Text = dataGridView5.Rows[dong].Cells[5].Value.ToString();
            txt_slccc6.Text = dataGridView5.Rows[dong].Cells[6].Value.ToString();
            txt_mota61.Text = dataGridView5.Rows[dong].Cells[7].Value.ToString();
            txt_nb6.Text = dataGridView5.Rows[dong].Cells[8].Value.ToString();
        }



        //-------------------------------------------------------------------NÚT CHỨC NĂNG-------------------------------------------------------------------
        //nút chức năng của nhân viên
        private void button2_Click(object sender, EventArgs e)
        {
            DTO_NhanVien nhanvien = new DTO_NhanVien();

            nhanvien.idnhanvien = txt_maso.Text;
            nhanvien.hoten = txt_ten.Text;
            nhanvien.ngaysinh = DateTime.Parse(dt_ngaysinh.Text);
            nhanvien.gioitinh = cbb_gt.Text;
            nhanvien.ngaybatdaulam = DateTime.Parse(dt_ngaylam.Text);
            nhanvien.diachi = txt_diachi.Text;
            nhanvien.email = txt_email.Text;
            nhanvien.sdt = txt_sdt.Text;
            nhanvien.luong = txt_luong.Text;

            BUS_NhanVien bus_nhanvien = new BUS_NhanVien();
            bus_nhanvien.update_nhanvien(nhanvien);

            Quan_Ly_Load(sender, e);
            reset();
        }

        private void button3_Click(object sender, EventArgs e)
        {
            DTO_NhanVien dto_nhanvien = new DTO_NhanVien();
            BUS_NhanVien bus_nhanvien = new BUS_NhanVien();
            dto_nhanvien.idnhanvien = txt_maso.Text;
            bus_nhanvien.delete_nhanvien(dto_nhanvien);

            BUS_TaiKhoan bus_taikhoan = new BUS_TaiKhoan();
            DTO_TaiKhoan dto_taikhoan = new DTO_TaiKhoan();
            dto_taikhoan.ID = txt_maso.Text;
            bus_taikhoan.delete_taikhoan(dto_taikhoan);

            Quan_Ly_Load(sender, e);
            reset();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            reset();
        }

        private void button4_Click(object sender, EventArgs e)
        {
            DangNhap dn = new DangNhap();
            this.Hide();
            dn.ShowDialog();
        }
       
        private void groupBox1_Enter(object sender, EventArgs e)
        {

        }


        //nút chức năng của loại hàng


        private void groupBox4_Enter(object sender, EventArgs e)
        {

        }

        private void label10_Click(object sender, EventArgs e)
        {

        }

        private void label12_Click(object sender, EventArgs e)
        {

        }

        private void groupBox5_Enter(object sender, EventArgs e)
        {

        }


        private void dataGridView1_CellContentClick(object sender, DataGridViewCellEventArgs e)
        {

        }

        private void button9_Click(object sender, EventArgs e)
        {
            if (txt_idloaihang.TextLength == 0)
            {
                MessageBox.Show("Chưa nhập ID loại hàng");
            }
            else if (txt_tenloaihang.TextLength == 0)
            {
                MessageBox.Show("Chưa nhập tên loại hàng");
            }
            else if (txt_mota.TextLength == 0)
            {
                MessageBox.Show("Chưa nhập mô tả");
            }

            else
            {
                DTO_LoaiHang dto_loaihang = new DTO_LoaiHang();

                dto_loaihang.idloaihang = txt_idloaihang.Text;
                dto_loaihang.tenloaihang = txt_tenloaihang.Text;
                dto_loaihang.mota = txt_mota.Text;

                BUS_LoaiHang bus_loaihang = new BUS_LoaiHang();
                bus_loaihang.insert_loaihang(dto_loaihang);

                Quan_Ly_Load(sender, e);
                reset_loaihang();
            }
        }


        private void button6_Click(object sender, EventArgs e)
        {
         
            DTO_LoaiHang dto_loaihang = new DTO_LoaiHang();

                dto_loaihang.idloaihang = txt_idloaihang.Text;
                dto_loaihang.tenloaihang = txt_tenloaihang.Text;
                dto_loaihang.mota = txt_mota.Text;

                BUS_LoaiHang bus_loaihang = new BUS_LoaiHang();
                bus_loaihang.update_loaihang(dto_loaihang);

                Quan_Ly_Load(sender, e);
                reset_loaihang();
            
        }

        private void button7_Click(object sender, EventArgs e)
        {
            DTO_LoaiHang dto_loaihang = new DTO_LoaiHang();
            dto_loaihang.idloaihang = txt_idloaihang.Text;

            BUS_LoaiHang bus_loaihang = new BUS_LoaiHang();
            bus_loaihang.delete_loaihang(dto_loaihang);

            Quan_Ly_Load(sender, e);
            reset_loaihang();
        }

        private void button5_Click(object sender, EventArgs e)
        {
            reset_loaihang();
        }

        private void button8_Click(object sender, EventArgs e)
        {
        }
        private void but_thoatlh_Click(object sender, EventArgs e)
        {
            this.Hide();
            DangNhap dn = new DangNhap();
            dn.ShowDialog();
            reset_loaihang();
        }
        private void groupBox5_Enter_1(object sender, EventArgs e)
        {

        }
        private void tabPage3_Click(object sender, EventArgs e)
        {

        }

        //Nút chức năng của nhà cung cấp
        private void dataGridView2_CellContentClick(object sender, DataGridViewCellEventArgs e)
        {

        }
        private void dataGridView2_RowErrorTextChanged(object sender, DataGridViewRowEventArgs e)
        {

        }
        private void dataGridView2_DragEnter(object sender, DragEventArgs e)
        {

        }

        private void but_Thêm_Click(object sender, EventArgs e)
        {
            if (txt_idnhacungcap.TextLength == 0)
            {
                MessageBox.Show("Chưa nhập ID nhà cung cấp");
            }
            else if (txt_tencongty.TextLength == 0)
            {
                MessageBox.Show("Chưa nhập tên công ty");
            }
            else if (txt_diachiNCC.TextLength == 0)
            {
                MessageBox.Show("Chưa nhập địa chỉ");
            }
            else if (txt_sđt.TextLength == 0)
            {
                MessageBox.Show("Chưa nhập số điện thoại");
            }
            else if (txt_website.TextLength == 0)
            {
                MessageBox.Show("Chưa nhập website");
            }
            else if (txt_congiaodich.TextLength == 0)
            {
                MessageBox.Show("Chưa nhập còn giao dịch");
            }

            else
            {
                DTO_NhaCungCap dto_nhacungcap = new DTO_NhaCungCap();
                dto_nhacungcap.idnhacungcap = txt_idnhacungcap.Text;
                dto_nhacungcap.tencongty = txt_tencongty.Text;
                dto_nhacungcap.diachi = txt_diachiNCC.Text;
                dto_nhacungcap.sodienthoai = txt_sđt.Text;
                dto_nhacungcap.website = txt_website.Text;
                dto_nhacungcap.congiaodich = txt_congiaodich.Text;

                BUS_NhaCungCap bus_nhacungcap = new BUS_NhaCungCap();
                bus_nhacungcap.insert_nhacungcap(dto_nhacungcap);

                Quan_Ly_Load(sender, e);
                reset_nhacungcap();
            }
        }

        private void but_Sửa_Click(object sender, EventArgs e)
        {
                DTO_NhaCungCap dto_nhacungcap = new DTO_NhaCungCap();
                dto_nhacungcap.idnhacungcap = txt_idnhacungcap.Text;
                dto_nhacungcap.tencongty = txt_tencongty.Text;
                dto_nhacungcap.diachi = txt_diachiNCC.Text;
                dto_nhacungcap.sodienthoai = txt_sđt.Text;
                dto_nhacungcap.website = txt_website.Text;
                dto_nhacungcap.congiaodich = txt_congiaodich.Text;

                BUS_NhaCungCap bus_nhacungcap = new BUS_NhaCungCap();
                bus_nhacungcap.update_nhacungcap(dto_nhacungcap);

                Quan_Ly_Load(sender, e);
                reset_nhacungcap();
        }

        private void but_Xóa_Click(object sender, EventArgs e)
        {
            DTO_NhaCungCap dto_nhacungcap = new DTO_NhaCungCap();
            dto_nhacungcap.idnhacungcap = txt_idnhacungcap.Text;          

            BUS_NhaCungCap bus_nhacungcap = new BUS_NhaCungCap();
            bus_nhacungcap.delete_nhacungcap(dto_nhacungcap);

            Quan_Ly_Load(sender, e);
            reset_nhacungcap();
        }

        private void but_LàmMoi_Click(object sender, EventArgs e)
        {
            reset_nhacungcap();
        }

        private void but_Thoát_Click(object sender, EventArgs e)
        {
            this.Hide();
            DangNhap dn = new DangNhap();
            dn.ShowDialog();
        }

        private void label21_Click(object sender, EventArgs e)
        {

        }

        //nút chức năng của công ty giao hàng
        private void btt_Thêm_Click(object sender, EventArgs e)
        {
            if (txt_idcty.TextLength == 0)
            {
                MessageBox.Show("Chưa nhập ID công ty giao hàng");
            }
            else if (txt_tenctygiaohang.TextLength == 0)
            {
                MessageBox.Show("Chưa nhập tên công ty giao hàng");
            }
            else if (txt_sđtctygiaohang.TextLength == 0)
            {
                MessageBox.Show("Chưa nhập số điện thoại");
            }
            else if (txt_diachictygiaohang.TextLength == 0)
            {
                MessageBox.Show("Chưa nhập địa chỉ công ty giao hàng");
            }

            else
            {
                DTO_CongTyGiaoHang dto_congtygiaohang = new DTO_CongTyGiaoHang();
                dto_congtygiaohang.idcty = txt_idcty.Text;
                dto_congtygiaohang.tencongty = txt_tenctygiaohang.Text;
                dto_congtygiaohang.sodienthoai = txt_sđtctygiaohang.Text;
                dto_congtygiaohang.diachi = txt_diachictygiaohang.Text;

                BUS_CongTyGiaoHang bus_congtygiaohang = new BUS_CongTyGiaoHang();
                bus_congtygiaohang.insert_ctygiaohang(dto_congtygiaohang);

                Quan_Ly_Load(sender, e);
                reset_ctygiaohang();
            }
        }

        private void but_Sửa4_Click(object sender, EventArgs e)
        {
            
                DTO_CongTyGiaoHang dto_congtygiaohang = new DTO_CongTyGiaoHang();

                dto_congtygiaohang.idcty = txt_idcty.Text;
                dto_congtygiaohang.tencongty = txt_tenctygiaohang.Text;
                dto_congtygiaohang.sodienthoai = txt_sđtctygiaohang.Text;
                dto_congtygiaohang.diachi = txt_diachictygiaohang.Text;

                BUS_CongTyGiaoHang bus_congtygiaohang = new BUS_CongTyGiaoHang();
                bus_congtygiaohang.update_ctygiaohang(dto_congtygiaohang);

                Quan_Ly_Load(sender, e);
                reset_ctygiaohang();
            
        }

        private void but_Xóa4_Click(object sender, EventArgs e)
        {
            DTO_CongTyGiaoHang dto_congtygiaohang = new DTO_CongTyGiaoHang();
            dto_congtygiaohang.idcty = txt_idcty.Text;

            BUS_CongTyGiaoHang bus_congtygiaohang = new BUS_CongTyGiaoHang();
            bus_congtygiaohang.delete_ctygiaohang(dto_congtygiaohang);

            Quan_Ly_Load(sender, e);
            reset_ctygiaohang();
        }

        private void but_lammoi4_Click(object sender, EventArgs e)
        {
            reset_ctygiaohang();
        }

        private void but_Thoát4_Click(object sender, EventArgs e)
        {
            this.Hide();
            DangNhap dn = new DangNhap();
            dn.ShowDialog();
        }

        //Nút chức năng của sản phẩm
        private void label31_Click(object sender, EventArgs e)
        {

        }

        private void tabPage6_Click(object sender, EventArgs e)
        {

        }

        private void txt_them6_Click(object sender, EventArgs e)
        {
            if (txt_idsp6.TextLength == 0)
            {
                MessageBox.Show("Chưa nhập ID sản phẩm");
            }
            else if (txt_tensp6.TextLength == 0)
            {
                MessageBox.Show("Chưa nhập tên sản phẩm");
            }
            else if (txt_dongianhap6.TextLength == 0)
            {
                MessageBox.Show("Chưa nhập đơn giá nhập");
            }
            else if (txt_soluongcon6.TextLength == 0)
            {
                MessageBox.Show("Chưa nhập số lượng còn");
            }
            else if (txt_slccc6.TextLength == 0)
            {
                MessageBox.Show("Chưa nhập số lượng chờ cung cấp");
            }
            else if (txt_mota61.TextLength == 0)
            {
                MessageBox.Show("Chưa nhập mô tả");
            }
            else if (txt_nb6.TextLength == 0)
            {
                MessageBox.Show("Chưa nhập ngừng bán");
            }

            else
            {
                DTO_SanPham dto_sanpham = new DTO_SanPham();
                dto_sanpham.idsanpham = txt_idsp6.Text;
                dto_sanpham.tensp = txt_tensp6.Text;
                dto_sanpham.idnhacungcap = cbb_idncc.Text;
                dto_sanpham.idloaihang = cbb_idlh.Text;
                dto_sanpham.dongianhap = txt_dongianhap6.Text;
                dto_sanpham.soluongcon = txt_soluongcon6.Text;
                dto_sanpham.soluongchocungcap = txt_slccc6.Text;
                dto_sanpham.mota = txt_mota61.Text;
                dto_sanpham.ngungban = txt_nb6.Text;

                BUS_SanPham bus_sanpham = new BUS_SanPham();
                bus_sanpham.insert_sanpham(dto_sanpham);

                //load_sanpham();
                Quan_Ly_Load(sender, e);
                reset_sanpham();
            }
        }

        private void txt_sua6_Click(object sender, EventArgs e)
        {
            DTO_SanPham dto_sanpham = new DTO_SanPham();
            dto_sanpham.idsanpham = txt_idsp6.Text;
            dto_sanpham.tensp = txt_tensp6.Text;
            dto_sanpham.idnhacungcap = cbb_idncc.Text;
            dto_sanpham.idloaihang = cbb_idlh.Text;
            dto_sanpham.dongianhap = txt_dongianhap6.Text;
            dto_sanpham.soluongcon = txt_soluongcon6.Text;
            dto_sanpham.soluongchocungcap = txt_slccc6.Text;
            dto_sanpham.mota = txt_mota61.Text;
            dto_sanpham.ngungban = txt_nb6.Text;

            BUS_SanPham bus_sanpham = new BUS_SanPham();
            bus_sanpham.update_sanpham(dto_sanpham);

            Quan_Ly_Load(sender, e);
            reset_sanpham();
        }

        private void txt_xoa6_Click(object sender, EventArgs e)
        {
            DTO_SanPham dto_sanpham = new DTO_SanPham();
            dto_sanpham.idsanpham = txt_idsp6.Text;

            BUS_SanPham bus_sanpham = new BUS_SanPham();
            bus_sanpham.delete_sanpham(dto_sanpham);

            Quan_Ly_Load(sender, e);
            reset_sanpham();
        }

        private void txt_lammoi6_Click(object sender, EventArgs e)
        {
            reset_sanpham();
        }

        private void txt_thoat6_Click(object sender, EventArgs e)
        {
            DangNhap dn = new DangNhap();
            this.Hide();
            dn.ShowDialog();
        }

        //lấy dl từ cái đã có trước
        private void cbb_idncc_Click(object sender, EventArgs e)
        {
            BUS_SanPham bus_sanpham = new BUS_SanPham();
            cbb_idncc.DataSource =  bus_sanpham.view_load_idncc();

            cbb_idncc.DisplayMember = "idnhacungcap";
        }
        private void cbb_idlh_Click(object sender, EventArgs e)
        {
            BUS_SanPham bus_sanpham = new BUS_SanPham();
            cbb_idlh.DataSource =  bus_sanpham.view_load_idlh();

            cbb_idlh.DisplayMember = "idloaihang";
        }

        
    }
}
