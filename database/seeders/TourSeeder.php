<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tours')->insert([
            [
                
                'tour_name' => 'Hà Nội - Cao Nguyên Đá - Cột Cờ Lũng Cú - Mèo Vạc',
                'tour_image' => 'cotCoLungCu.jpg',
                'start_day' => '2024-04-01',
                'time' => '3 ngày 4 đêm',
                'star_from' => 'Hà Nội',
                'price' => 1560000,
                'vehicle' => 'Xe khách',
                'tour_description' => 'Hành trình từ Hà Nội đến Cao Nguyên Đá và Cột Cờ Lũng Cú rồi tiếp tục đến Mèo Vạc là một cuộc phiêu lưu tuyệt vời qua những cung đường đồi núi hùng vĩ của vùng cao phía Bắc Việt Nam. Điều này mang lại cơ hội cho du khách khám phá vẻ đẹp hoang sơ của thiên nhiên, cũng như tìm hiểu về văn hóa địa phương và cuộc sống của cư dân nơi đây.',
                'tour_schedule' => '<h3> 1.	ĐÊM 01: HÀ NỘI - HÀ GIANG (NGỦ ĐÊM TRÊN XE)</h3>
                <p>19h00-20h00: Xe ô tô đón Quý khách tại Nhà Hát Lớn Hà Nội sau đó khởi hành đi Hà Giang bằng xe giường nằm.</p>
                <p>Lưu ý: Đối với khách hàng xuống sân bay Nội Bài sát giờ khởi hành, xe giường nằm có thể đón Quý khách tại Ngã 3 Kim Anh (đầu cao tốc Hà Nội - Lào Cai, cách sân bay Nội Bài 03km vào khoảng 22h00).</p>
                <p>Quý khách nghỉ đêm trên xe gường nằm.</p>
                <h3>2.	NGÀY 01: HÀ GIANG - LŨNG CÚ - ĐỒNG VĂN (ĂN SÁNG, TRƯA, TỐI)</h3>
                <p>04h00-04h30: Đến Hà Giang, xe đưa Quý khách về Homestay để nghỉ ngơi, vệ sinh cá nhân buổi sáng và ăn sáng tại Homestay.</p>
                <p>06h30: Quý khách ăn sáng sau đó lên xe đi khám phá mảnh đất Hà Giang với phong cảnh hùng vỹ nên thơ. Trên đường đi Quý khách dừng chân tại điểm dừng chân Cổng Trời Quản Bạ chụp hình Núi đôi Cô Tiên hay còn gọi là Núi đôi Quản Bạ và toàn cảnh thị trấn Tam Sơn từ trên cao.</p>
                <p>Trưa: Đến Yên Minh, ăn trưa tại nhà hàng.</p>
                <p>Chiều: Quý khách tiếp tục lên xe chiêm ngưỡng cảnh đẹp hùng vỹ của Công viên địa chất toàn cầu Cao nguyên đá Đồng Văn.</p>
                <p>Dọc đường đi Quý khách dừng ghé thăm:</p>
                <p>- Phố Cáo với những ngôi nhà đặc trưng của người Hmông bởi những hàng rào đá cung quanh nhà.</p>
                <p>- Thăm bản Sủng Là thăm ngôi nhà Cổ của người Hmông với tường trình bằng đất - nơi đã được sử dụng làm bối cảnh để quay bộ phim nhựa "Chuyện của Pao" năm 2006 của đạo diễn Ngô Quang Hải được chuyển thể từ truyện ngắn "Tiếng đàn môi sau bờ rào đá" của nhà văn Đỗ Bích Thủy đã giành được 4 giải Cánh diều vàng. Quý khách dừng chân nghỉ ngơi và chụp hình hoa tam giác mạch gần dốc chín khoanh.</p>
                <p>- Dinh Vua Mèo - Vương Chính Đức nằm trong một thung lũng của xã Sà Phìn, đây là dòng họ giàu có và quyền uy nhất Châu Đồng Văn vào đầu thế kỷ 20.</p>
                <p>- Thăm Cột Cờ Lũng Cũ - nơi địa đầu Tổ quốc, điểm có vĩ độ cao nhất trên bản đồ của Việt Nam.</p>
                <p>17h00: Về đến thị trấn Đồng Văn, nhận phòng khách sạn, nghỉ ngơi. Ăn tối. Buổi tối, Quý khách tự do thăm quan Phố Cổ Đồng Văn đã tồn tại cùng với thời gian gần một thế kỷ. Quý khách có thể ngồi nhâm nhi thưởng thức một ly cà phê tại quán Café phố Cổ (chi phí tự túc).</p>
                <p>Nghỉ đêm tại Đồng Văn.</p>
                <h3>3.	NGÀY 02: ĐỒNG VĂN - MÈO VẠC - HÀ GIANG (ĂN SÁNG, TRƯA, TỐI)</h3>
                <p>Sáng: Quý khách ăn sáng, tự do thăm quan mua sắm tại chợ Đồng Văn.</p>
                <p>08h00: Trả phòng khách sạn và lên xe đi thăm quan:</p>
                <p>- Chinh phục đèo Mã Pì Lèng trên đường đi Mèo Vạc, cũng là đoạn đẹp nhất trên con đường mang tên "Đường Hạnh phúc". </p>
                <p>Chụp hình với vẻ đẹp hùng vĩ của hẻm vực Mã Pì Lèng sâu 800m - nơi địa hình bị chia cắt sâu nhất của Việt Nam. Sau đó tiếp tục về qua thị trấn Mèo Vạc để về Yên Minh.</p>
                <p>- Trải nghiệm ngồi thuyền thăm quan Hẻm Tu Sản ( Không bao gồm phí xe ôm chở xuống bến thuyền và vé thuyền 200.000đ/ khách)</p>
                <p>- Dừng chân chụp hình tại con đường đèo chữ M nổi tiếng của Mèo Vạc.</p>
                <p>- Thăm chợ Phiên Mèo Vạc (nếu vào sáng chủ nhật hàng tuần)</p>
                <p>Trưa: Đến Yên Minh, ăn trưa tại nhà hàng. Sau bữa trưa, Quý khách tiếp tục lên xe về .</p>
                <p>Trong trường hợp kịp thời gian, xe và hướng dẫn viên sẽ đưa Quý khách vào thăm quan Làng dệt Lanh Lùng Tám nổi tiếng với kỹ thuật dệt lanh của người HMông trắng ( lưu ý: đây là điểm không bắt buộc phải đi).</p>',
                'tour_sale' => '10%',
                'location_id' => 1,
                'guide_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
            // [
            //     'tour_name' => 'ĐÀ NẴNG - RỪNG DỪA BẢY MẪU - HỘI AN - BÀ NÀ HILLS',
            //     'tour_image' => 'baNaHill.jpg',
            //     'start_day' => '2024-03-26',
            //     'time' => '3 ngày 2 đêm',
            //     'star_from' => 'Thành phố Hồ Chí Minh',
            //     'price' => 5990000,
            //     'vehicle' => 'Máy bay',
            //     'tour_description' => '',
            //     'tour_schedule' => '',
            //     'tour_sale' => 'Máy bay',
            //     'location_id' => 2,
            //     'guide_id' => 2,
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],

            [
                'tour_name' => 'ĐÀ NẴNG - RỪNG DỪA BẢY MẪU - HỘI AN - BÀ NÀ HILLS',
                'tour_image' => 'baNaHill.jpg',
                'start_day' => '2024-03-26',
                'time' => '3 ngày 2 đêm',
                'star_from' => 'Thành phố Hồ Chí Minh',
                'price' => 5990000,
                'vehicle' => 'Máy bay',
                'tour_description' => 'Kết hợp Đà Nẵng, Rừng Dừa Bảy Mẫu, Hội An và Bà Nà Hills trong một chuyến đi là một trải nghiệm đa dạng về văn hóa, thiên nhiên và giải trí. Từ bãi biển đẹp và các điểm tham quan lịch sử ở Hội An, đến những khu rừng dừa bao quanh Đà Nẵng và cuối cùng là khu du lịch nổi tiếng Bà Nà Hills với cảnh quan ngoạn mục và những trải nghiệm giải trí độc đáo. Đây sẽ là một chuyến đi đáng nhớ cho du khách muốn khám phá vùng đất miền Trung nước Việt.',

                'tour_schedule' => '<h3>Ngày 1: TP.HCM - ĐÀ NẴNG - BÁN ĐẢO SƠN TRÀ - RỪNG DỪA BẢY MẪU - PHỐ CỔ HỘI AN ( • Ăn sáng • Ăn trưa )</h3>
                <p>Sáng: Hướng dẫn viên đón quý khách tại sân bay Tân Sơn Nhất hỗ trợ làm thủ tục lên máy bay đi Đà Nẵng. Chuyến bay dự kiến: VJ622 SGNDAD 07:00 - 08:25</p>
                <p>Đến Đà Nẵng, xe và HDV địa phương đón đoàn tới dùng bữa sáng tại nhà hàng.</p>
                <p>Sau bữa sáng đoàn khởi hành tham quan:</p>
                <p>- Bán Đảo Sơn Trà: Một món quà lớn mà thiên nhiên ưu ái ban tặng cho thành phố Đà Nẵng. Mang trong mình một vẻ đẹp nguyên sơ, hữu tình, bãi biển nước trong vắt, những tán cây xanh rợp bóng, nơi đây có không khí trong lành kết hợp cùng nguồn tài nguyên phong phú và là nơi thu hút rất nhiều khách du lịch trên cả nước.</p>
                <p>- Viếng Chùa Linh Ứng: Được xem là cõi Phật giữa chốn trần gian. Nơi có tượng Quan Âm cao nhất Việt Nam, được xem là một trong Tứ Trấn Đà thành.</p>
                <p>Trưa: Xe đưa đoàn đến nhà hàng dùng bữa trưa với đặc sản “Bánh tráng cuốn thịt heo”, mì Quảng, bánh bèo,...</p>
                <p>Sau đó, đoàn khởi hành về khách sạn 4* nhận phòng nghỉ ngơi.</p>
                <p>Chiều: Xe đưa Quý khách khởi hành vào Hội An, đoàn tham quan:</p>
                <p>- Rừng dừa Bảy Mẫu: Quý khách đi bộ dọc theo con đường làng 5 phút đến bến thuyền. Ngồi trên những chiếc thuyền thúng quý khách được tận mắt xem người dân địa phương quăng chài trên sông để đánh bắt cá & có thể tự tay trải nghiệm kỹ năng quăng chài của mình. Sau đó, xem những màn lắc thúng chai, thưởng thức kĩ năng “chém nước” đặc sắc của những ngư dân làng dừa thôn Vạn Lăng.</p>
                <p>- Thuyền thúng cập bến Nhà hàng sinh thái, nghỉ ngơi trên nhà lá. Quý khách tham quan tự do không gian khu du lịch sinh thái.</p>
                <p>14h00: Rời Rừng dừa bảy mẫu, đoàn di chuyển đến Phố Cổ Hội An:</p>
                <p>- Tại đây, du khách bách bộ tham quan Phố Cổ với: Chùa Cầu Nhật Bản, Nhà cổ hàng trăm năm tuổi, Hội Quán Phước Kiến & Xưởng thủ công mỹ nghệ…</p>
                <p>- Đoàn tự do thưởng thức các món đặc sản tại Hội An như: Cao Lầu, Mì Quảng…</p>
                <h3>Ngày 2: ĐÀ NẴNG - BÀ NÀ HILLS - CHECK IN CẦU VÀNG - CẦU RỒNG - CẦU TÌNH YÊU - CÁ CHÉP HÓA LONG - TẮM BIỂN MỸ KHÊ ( • Ăn sáng • Ăn tối )</h3>
                <p>Sáng: Quý khách dùng bữa điểm tâm sáng tại nhà hàng. Sau đó xe sẽ đưa đoàn đi tham quan:</p>
                <p>Chương trình: Khám phá Bà Nà Hills (chi phí chưa bao gồm từ 1.250.000vnđ/khách)</p>
                <p>- Tham quan KDL Bà Nà - Núi Chúa nơi có những khoảnh khoắc giao mùa bất ngờ Xuân - Hạ - Thu - Đông trong một ngày. Qúy khách sẽ tận hưởng cảm giác bồng bền khi ngồi trên Cabin lơ lững giữa chừng mây.</p>
                <p>- Viếng Chùa Linh Ứng với Tượng Phật Thích Ca cao 27m, viếng đền thờ Bà Chúa Mẫu Thượng Ngàn.</p>
                <p>- Công viên Fantasy Park với các trò chơi phiêu lưu mới lạ như: Vòng Quay Tình Yêu, Phi Công Skiver, Đường Đua Lửa, Ngôi Nhà Ma và Khu trưng bày hơn 40 tượng sáp những nhân vật nổi tiếng trên thế giới…</p>
                <p>Bảo Tàng Sáp (tự túc từ: 100.000đ) một trong những điểm nổi bật tại KDL Bà Nà là nơi tạc những bức tượng sáp của những nhân vật nổi tiếng trên thế giới, rất thú vị.</p>
                <p>Trưa: Đoàn dùng bữa trưa tại nhà hàng của KDL Bà Nà với menu buffet cơm Việt Nam (nếu quý Khách có tham gia gói tham quan Bà Nà)</p>
                <p>Đoàn tiếp tục hành trình tham quan và khám phá Bà Nà: Núi Chúa, Biệt thự cổ, Thác Cầu Vồng, suối Nai, Miếu Bà, đồi Vọng Nguyệt, Biệt thự Hoàng Lan,...</p>
                <p>13h00: Quý khách lên cáp treo di chuyển đến cây Cầu Vàng (Cầu bàn tay Phật). Từ trên cáp treo, quý khách sẽ thấy cây Cầu Vàng hiện ra giữa mây trời và núi non trùng điệp.</p>
                <p>15h00: Đoàn di chuyển xuống cáp treo, xe đưa đoàn về lại khách sạn nghỉ ngơi.</p>
                <p>16h00: Trên đường về xe đưa Quý khách vòng qua Cầu Rồng, lưu lại dấu ấn trên Cầu Tình Yêu, tản bộ thưởng thức không khí trong lành bên bờ Hàn Giang với tượng Cá Chép Hóa Rồng - Biểu tượng mong muốn vươn lên của người Đà Nẵng.  </p>
                <p>Tối: Đến giờ hẹn xe đưa đoàn đến nhà hàng dùng bữa tối. Quý khách tự do dạo chơi, thăm quan Cầu Tình yêu, Cá chép hóa rồng, dạo bộ đường Bạch Đằng. Ngắm và thưởng thức cầu Rồng phun nước và phun lửa lúc 21h (thứ 7/CN hàng tuần)</p>
                <p>Nghỉ đêm tại Đà Nẵng.</p>
                <h3>Ngày 3: ĐÀ NẴNG - CÔNG VIÊN KÌ QUAN THẾ GIỚI - NGŨ HÀNH SƠN - TP. HCM ( • Ăn sáng • Ăn trưa )</h3>
                <p>Sáng: Quý khách dùng điểm tâm sáng, tự do nghỉ ngơi, tắm biển Mỹ Khê, tắm hồ bơi tại khách sạn.</p>
                <p>Đoàn làm thủ tục trả phòng khách sạn. Đoàn khởi hành đi tham quan:</p>
                <p>- Công viên Kì Quan Thế Giới, là một tuyệt tác nằm trong tổ hợp của khách sạn Hòa Bình Green. Với diện tích khoảng 200 m2, công viên như một thế giới thu nhỏ với các kỳ quan nổi tiếng của các nước trên thế giới. Đến đây thì quý khách không cần phải đi đâu xa. Không cần phải đến thủ đô Paris xa xôi, cũng chẳng cần đến Đảo Liberty, cảng New York,…. hay bất kỳ đâu. Qúy khách vẫn có thể có thể thoải mái nhìn ngắm và chụp ảnh thỏa thích với những công trình kiến trúc ấn tượng trên thế giới.</p>
                <p>Trưa: Xe đưa đoàn đến nhà hàng dùng cơm trưa.</p>
                <p>Chiều: Đoàn tham quan:</p>
                <p>- Ngũ Hành Sơn & Làng Nghề Điêu Khắc Đá Non Nước với các pho tượng bằng đá được điêu khắc dưới bàn tay tài hoa của nghệ nhân nơi đây.</p>
                <p>Đến giờ hẹn đoàn khởi hành ra sân bay Đà Nẵng làm thủ tục bay về TP. Hồ Chí Minh, trên chuyến bay VJ633 17:40. Kết thúc hành trình tour du lịch Đà Nẵng 3 ngày 2 đêm.</p>',

                'tour_sale' => '15%',
                'location_id' => 2,
                'guide_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],






        ]);
    }
}
