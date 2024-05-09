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
                'vehicle' => 'Thành phố Hồ Chí Minh',
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
                'total_seats' => 45,
                'booked_seats' => 0,
                'location_id' => 1,
                'guide_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'tour_name' => 'Đà Nẵng - Rừng Dừa Bảy Mẫu - Hội An - Bà Nà Hills',
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
                'total_seats' => 45,
                'booked_seats' => 0,
                'location_id' => 2,
                'guide_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'tour_name' => 'Phú Quốc - Vinwonder - Safari World - Hòn Thơm',
                'tour_image' => 'phuQuoc.jpg',
                'start_day' => '2024-05-01',
                'time' => '3 ngày 2 đêm',
                'star_from' => 'Thành phố Hồ Chí Minh',
                'price' => 7390000,
                'vehicle' => 'Máy bay',
                'tour_description' => 'Phú Quốc là điểm nghỉ dưỡng, lặn biển, tham quan, và khám phá sinh thái tuyệt vời. Mũi Ông Đội, Đá Chào là thế giới san hô và cá biển sặc sỡ. Bãi Sao cát trắng mịn, dáng cong, nước xanh ngọc bích. Đặc sản danh tiếng cả nước là tiêu sọ, nước mắm, rượu sim, ngọc trai.',
                'tour_schedule' => '<h3>Ngày 1: TP HỒ CHÍ MINH - PHÚ QUỐC - HÒN THƠM - THỊ TRẤN HOÀNG HÔN - GRAND WORLD (Ăn trưa, chiều)</h3>
                <p>Quý khách tập trung tại Sân bay Tân Sơn Nhất, ga đi Trong Nước, hướng dẫn viên hỗ trợ làm thủ tục đáp chuyến bay đi Phú Quốc. </p>
                <p>Xe đón đoàn tại sân bay đưa đến nhà ga cáp treo An Thới tham quan Sun World Hon Thom Nature Park với những hoạt động thú vị:</p>
                <p>- Trải nghiệm cáp treo 3 dây vượt biển dài nhất thế giới - 7.899.9 mét.</p>
                <p>- Phấn khích tột độ cùng thử thách "Mộc Xà thịnh nộ" - trò chơi tàu lượn bằng gỗ đầu tiên tại Việt Nam, có tốc độ tối đa 80km/h với nhiều góc lượn ngoạn mục; đài quan sát "Mắt đại bàng" cao 120m - du khách như được bay lên không trung, thưởng ngoạn đại dương xanh ngắt bao la, những cánh rừng nhiệt đới xanh mướt, những đảo nhỏ nhấp nhô giữa biển trời khoáng đạt (trò chơi có thể tạm dừng vì lịch bảo trì)</p>
                <p>- Thỏa thích tắm biển Hòn Thơm: một trong những bãi biển “quyến rũ nhất hành tinh”, với bãi cát trắng mịn, hoang sơ, hàng dừa nghiêng soi bóng, màu nước biển xanh màu ngọc bích, phản chiếu long lanh dưới ánh nắng mặt trời.</p>
                <p>- Tham gia các hoạt động giải trí trên biển: kayak, jetski, dù lượn, phao chuối (chi phí tự túc).</p>
                <p>- Vui chơi tại công viên nước Aquatopia: một trong những công viên nước chủ đề hàng đầu Đông Nam Á, trải nghiệm 6 khu check-in chủ đề hấp dẫn mang phong cách thổ dân huyền bí.</p>
                <p>Lãng du trên con đường Thị trấn Hoàng Hôn - được thiết kế với kiến trúc độc đáo, rực rỡ sắc màu của một thị trấn châu Âu cổ kính: check-in 1001 kiểu bậc thang, Quảng trường La Mã, “kỳ quan” Khải Hoàn Môn, Tháp đồng hồ cao 75m - lấy ý tưởng từ tháp chuông St. Marks Campanile của Ý; chiêm ngưỡng Kiss Bridge - cây cầu nổi lên như một dải lụa giữa bờ biển trong xanh, với hai nhịp cầu vươn mình ôm trọn bờ cát trắng, hướng đến nhau, hợp vào làm một thể thống nhất nhưng không chạm nhau.</p>
                <p>Buổi tối, Quý khách có thể tự do khám phá một số hạng mục nổi bật tại “thành phố không ngủ” Grand World như: </p>
                <p>- Công viên Nghệ Thuật Đương Đại: sự giao thoa đặc sắc giữa nghệ thuật đương đại và thiên nhiên Đảo Ngọc.</p>
                <p>- Huyền thoại Tre: công trình tre lớn nhất Việt Nam.</p>
                <p>- Tản bộ bên dòng “kênh đào Venice” và nhìn ngắm những chiếc thuyền Gondola, khu phố shophouse lộng lẫy sắc màu, cổng lâu đài tráng lệ, ba cây cầu vòm bán nguyệt mang đậm kiến trúc châu Âu ...</p>
                <p>- Tham quan bảo tàng Gấu Teddy: lưu giữ nhiều hiện vật quý giá và tái hiện chuyến phiêu lưu hài hước của “nhà thám hiểm tài ba” Teddy Jones (chi phí tự túc)</p>
                <p>- Mãn nhãn với show diễn thực cảnh “Tinh Hoa Việt Nam” quy tụ hơn 200 diễn viên (chi phí tự túc)</p>
                <p>- Thưởng thức bữa tiệc ánh sáng đỉnh cao với show diễn “Sắc màu Venice”</p>
                <p>Nghỉ đêm tại Phú Quốc.</p>
                <h3>Ngày 2: VUI CHƠI THỎA THÍCH TẠI CÔNG VIÊN CHỦ ĐỀ VINWONDERS PHÚ QUỐC - KHU BẢO TỒN THIÊN NHIÊN SAFARI (Ăn sáng, trưa, chiều)</h3>
                <p>Quý khách bắt đầu hành trình trở về với thiên nhiên tại Vinpearl Safari Phú Quốc - Vườn thú bán hoang dã đầu tiên tại Việt Nam: với quy mô 180 ha, hơn 130 loài động vật quý hiếm, du khách thưởng thức các chương trình biểu diễn, chụp ảnh với động vật; trải nghiệm vườn thú mở trong rừng tự nhiên, gần gũi và thân thiện với con người.</p>
                <p>Buổi chiều, Quý khách tham quan khám phá Khu vui chơi giải trí VinWonders - Công viên chủ đề lớn nhất Việt Nam, quy mô hàng đầu Châu Á, du khách sẽ được:</p>
                <p>- Trải nghiệm 12 nền văn minh nhân loại từ cổ chí kim;</p>
                <p>- Khám phá 06 phân khu với hơn 100 hoạt động giải trí siêu độc lạ;</p>
                <p>- Cuồng nhiệt tại Công Viên Nước lớn nhất Đông Nam Á;</p>
                <p>- Chinh phục 20 trò chơi mạo hiểm khủng nhất hành tinh như đường trượt nhanh nhất thế giới “Cơn thịnh nộ của Zeus”, đường trượt khô “Cuộc chiến Chằn tinh” cao 15m đầu tiên của Việt Nam, đường trượt trong nhà tối “Chiến binh Đại bàng” và “Lời nguyền Ác long” - trò chơi tương tác trong nhà tối đầu tiên của Việt Nam,…</p>
                <p>- Ngỡ ngàng với show diễn triệu đô Once đẳng cấp thế giới;</p>
                <p>- Choáng ngợp trước thế giới đại dương huyền ảo với tầm nhìn vô cực qua tấm kính acrylic khổng lồ 8x25m bên trong Cung điện Hải vương - thủy cung hình rùa lớn nhất thế giới.</p>
                <p>Quý khách thưởng thức bữa tối tại VinWonders.</p>
                <p>Nghỉ đêm tại Phú Quốc.</p>
                <h3>Ngày 3:  PHÚ QUỐC - TP HỒ CHÍ MINH (Ăn sáng)</h3>
                <p>Quý khách dùng bữa sáng, thư giãn tại khách sạn đến giờ trả phòng. Sau đó, xe đưa đoàn tham quan và mua sắm đặc sản nổi tiếng tại Nhà thùng nước mắm Hồng Đức 1 / Khải Hoàn / Phụng Hưng, Đặc sản Đức Thạnh, Cơ sở sản xuất ngọc trai Phú Quốc - Trưng bày các trang sức bằng ngọc trai chính hiệu được nuôi cấy tại Phú Quốc. </p>
                <p>Xe đưa Quý khách ra sân bay đáp chuyến bay trở về TP Hồ Chí Minh. Chia tay Quý khách và kết thúc chương trình du lịch tại sân bay Tân Sơn Nhất.</p>',
                'tour_sale' => '15%',
                'total_seats' => 45,
                'booked_seats' => 0,
                'location_id' => 3,
                'guide_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'tour_name' => 'Nha Trang - Làng Chài Xưa - Biển Nhũ Tiên - Vinwonders',
                'tour_image' => 'nhaTrang.jpg',
                'start_day' => '2024-05-09',
                'time' => '4 ngày 3 đêm',
                'star_from' => 'Thành phố Hồ Chí Minh',
                'price' => 3590000,
                'vehicle' => 'Xe khách',
                'tour_description' => 'Nha Trang với khí hậu ôn hòa, biển xanh trong quanh năm cùng những điểm vui chơi bậc nhất và không ngừng đổi mới hằng ngày luôn thu hút du khách gần xa. Đến với Nha Trang, du khách không chỉ tận hưởng những đợt gió biển trong nắng ấm mà còn có dịp thưởng thức hải sản tươi ngon cùng sự chào đón nồng hậu từ những người dân vùng biển nghĩa tình, cho Quý khách trải nghiệm khó quên tại vùng đất này.',
                'tour_schedule' => '<h3>Ngày 1 - TP. HỒ CHÍ MINH - PHAN THIẾT - NHA TRANG (Ăn sáng, trưa, chiều)</h3>
                <p>Quý khách tập trung tại Discovery (39 Nguyễn Huệ, Bến Nghé, Quận 1, Thành phố Hồ Chí Minh). Xe đưa đoàn khởi hành đi Nha Trang. Trên đường đi đoàn ghé tham quan:</p>
                <p>• Bảo tàng Làng Chài Xưa: mở ra không gian tương tác tái hiện Làng Chài Xưa Mũi Né với lịch sử 300 năm cái nôi của nghề làm nước mắm, trải nghiệm cảm giác lao động trên đồng muối, đi trên con đường rạng xưa, thăm phố cổ Phan Thiết, vào xóm lò tĩn, thăm nhà lều của hàm hộ nước mắm xưa, đắm chìm cảm xúc trong biển 3D và thích thú khi đi chợ làng chài xưa với bàn tính tay, bàn cân xưa thú vị.</p>
                <p>Đến Nha Trang, Quý khách dùng bữa tối, tự do khám phá thành phố biển về đêm. Nghỉ đêm tại Nha Trang.</p>
                <h3>Ngày 2 - NHA TRANG - BIỂN NHŨ TIÊN - VINWONDERS (Ăn sáng, trưa, tự túc ăn chiều)</h3>
                <p>Dùng bữa sáng tại khách sạn, xe đưa đoàn tham quan:</p>
                <p>• Biển Nhũ Tiên: đắm mình trong làn nước biển trong xanh, mát mẻ, được bao bọc bởi bãi cát dài trắng xóa và những hàng dừa lao xao trong gió. Với vẻ đẹp hoang sơ, thơ mộng, biển Nhũ Tiên tựa như nàng tiên đang ngủ vùi giữa không gian mênh mông của sóng, của gió, của núi và của mây.
                </p>
                <p>Buổi chiều, Quý khách tự do khám phá thành phố Nha Trang hoặc đăng ký tham quan Vinwonders Nha Trang đầy sắc màu (chi phí tự túc): ngắm toàn cảnh Vịnh Nha Trang từ đỉnh vòng xoay mặt trời lớn nhất Việt Nam, tham quan bộ sưu tập “kỳ hoa, dị thảo” tại đồi Vạn Hoa, khu vườn thú mở - vườn Quý Vương, tham gia các trò chơi tương tác và liên hoàn tại Quảng trường Thần Thoại hay Vùng đất yêu thương, xem phim 4D tại lâu đài Đại Dương, khám phá khu trò chơi cảm giác mạnh, khu trò chơi trong nhà hay tắm biển, tắm hồ bơi lớn nhất Đông Nam Á… và thưởng thức chương trình biểu diễn Nhạc Nước hiện đại. Đoàn tự do dùng bữa tối tại đây và tiếp tục tham gia các hoạt động buổi tối tại Vinpearl đến giờ về lại đất liền. Nghỉ đêm tại Nha Trang</p>
                <h3>Ngày 3 - NHA TRANG - I-RESORT - THÁP BÀ PONARGAR (Ăn sáng, ăn trưa, chiều)</h3>
                <p>Dùng bữa sáng tại khách sạn, xe đưa đoàn tham quan và thư giãn tại:</p>
                <p>• Suối khoáng nóng I-Resort: với không gian yên tĩnh, cây cối xanh tươi, I-Resort sẽ hiện ra như một bức tranh thiên nhiên đậm chất Việt, Quý khách sẽ được trải nghiệm dịch vụ tắm khoáng thư giãn. Ngoài ra, Quý khách còn có thể tắm bùn khoáng hoặc massage cho làn da thêm tươi trẻ.
                </p>
                <p>Buổi chiều, đoàn tiếp tục tham quan các thắng cảnh tại thành phố biển:</p>
                <p>• Tháp Bà Ponagar: công trình tiêu biểu cho nghệ thuật kiến trúc và điêu khắc tín ngưỡng tôn giáo bậc nhất của dân tộc Chăm tại Nha Trang.</p>
                <p>• Hòn Chồng: một thắng cảnh tự nhiên nằm ở bờ biển phía Bắc thành phố Nha Trang. Nơi đây du khách có thể di chuyển vài bước đã chạm đến sóng biển hoặc chân đồi. Nhiều người bảo, Hòn Chồng là nơi giao nhau giữa biển và núi. Quần thể đá Hòn Chồng từ lâu đã trở thành điểm du lịch giàu tính nhân văn. Điều kỳ thú là những tảng đá lớn nằm chồng chất lên nhau bao đời nay nhưng sóng biển và mưa gió không thể xô ngã.
                </p>
                <p>• Ngọc trai Long Beach Pearl (đường Trương Hán Siêu): tham quan, mua sắm các sản phẩm từ ngọc trai - báu vật khơi xa kết hợp cùng sự sáng tạo của người nghệ nhân tạo thành những sản phẩm trang sức cao cấp, chất lượng cao. Không chỉ dành riêng cho phái nữ, Long Beach Pearl còn chế tác những chiếc vòng tay dây da ngọc trai dành cho nam giới. </p>
                <p>Nghỉ đêm tại Nha Trang.</p>
                <h3>Ngày 4 - NHA TRANG - TP. HỒ CHÍ MINH (Ăn sáng, trưa)</h3>
                <p>Sau khi dùng bữa sáng, xe đưa đoàn về lại thành phố Hồ Chí Minh, trên đường Quý khách ghé Ninh Thuận mua các sản phẩm đặc sản (nho, tỏi) của vùng đất nắng và gió nơi đây về làm quà cho người thân. Đến điểm đón ban đầu, chia tay đoàn và kết thúc chương trình du lịch.</p>',
                'tour_sale' => '5%',
                'total_seats' => 45,
                'booked_seats' => 0,
                'location_id' => 2,
                'guide_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'tour_name' => 'Hà Nội - Sapa - Fansipan - Hạ Long - Ninh Bình - Tràng An',
                'tour_image' => 'haLong.jpg',
                'start_day' => '2024-05-05',
                'time' => '7 ngày 6 đêm',
                'star_from' => 'Thành phố Hồ Chí Minh',
                'price' => 10390000,
                'vehicle' => 'Máy bay',
                'tour_description' => 'Nói đến vùng đất Quảng Ninh, không thể không nhắc đến Vịnh Hạ Long - nơi được UNESCO Công nhận hai lần là Di sản thiên nghiên thế giới với nhiều đảo, hòn và hang động đẹp nổi tiếng. Bên cạnh đó Quảng Ninh còn có Bãi Cháy - là một bãi tắm rộng và đẹp nằm sát bờ vịnh Hạ Long; Núi Yên Tử - vốn là một thắng cảnh thiên nhiên - và cũng là nơi lưu giữ nhiều di tích lịch sử với mệnh danh "đất tổ Phật giáo Việt Nam"; và nhiều di tích, danh thắng nổi tiếng, hấp dẫn khác như đảo Tuần Châu, Cô Tô...',
                'tour_schedule' => '<h3>Ngày 1 - TPHCM - SÂN BAY NỘI BÀI (HÀ NỘI) 00 bữa ăn: (Tự túc ăn ngày đầu tiên)</h3>
                <p>Quý khách tập trung tại sân bay Tân Sơn Nhất (ga trong nước), hướng dẫn làm thủ tục cho Quý khách đáp chuyến bay đi Hà Nội. Đến sân bay Nội Bài, xe đưa quý khách về trung tâm Hà Nội nhận phòng khách sạn nghỉ ngơi. </p>
                <p>Nghỉ đêm tại Hà Nội.</p>
                <h3>Ngày 2 - HÀ NỘI - SAPA - BẢN CÁT CÁT 03 bữa ăn: (Sáng, Trưa, Chiều)</h3>
                <p>Quý khách ăn sáng và trả phòng. Xe khởi hành đưa Quý khách đi tham quan: </p>
                <p>- Lăng Hồ Chủ Tịch (không viếng vào thứ 2, thứ 6 hàng tuần và giai đoạn bảo trì định kì hàng năm) tham quan và tìm hiểu cuộc đời và sự nghiệp của vị cha già dân tộc tại Nhà Sàn Bác Hồ, Bảo Tàng Hồ Chí Minh, Chùa Một Cột.</p>
                <p>Tiếp tục hành trình, Quý khách khởi hành đi Sapa theo cao tốc Hà Nội - Lào Cai. Trên đường, Quý khách dùng cơm trưa tại nhà hàng địa phương. Đến nơi, Quý khách tham quan:</p>
                <p>- Bản Cát Cát - đẹp như một bức tranh giữa vùng phố cổ Sapa, nơi đây thu hút du khách bởi cầu treo, thác nước, guồng nước và những mảng màu hoa mê hoặc du khách khi lạc bước đến đây. Thăm những nếp nhà của người Mông, Dao, Giáy trong bản, du khách sẽ không khỏi ngỡ ngàng trước vẻ đẹp mộng mị của một trong những ngôi làng cổ đẹp nhất Sapa. Tại đây Quý khách xem chương trình biểu diễn văn nghệ của người HMông.</p>
                <p>Quý khách dùng cơm tối và nhận phòng nghỉ ngơi hoặc tự do dạo phố ngắm nhà thờ Đá Sapa, tự do thưởng thức đặc sản vùng cao như: thịt lợn cắp nách nướng, trứng nướng, rượu táo mèo, giao lưu với người dân tộc vùng cao.</p>
                <p>Nghỉ đêm tại Sapa</p>
                <h3>Ngày 3 - SAPA - FANSIPAN LEGEND - ĐÈO Ô QUY HỒ 03 bữa ăn: (Sáng, Trưa, Chiều)</h3>
                <p>Quý khách dùng điểm tâm sáng tại khách sạn. xe đưa đoàn ra ga Sapa, Quý khách trải nghiệm đến khu du lịch Fansipan Legend bằng Tàu hỏa leo núi Mường Hoa hiện đại nhất Việt Nam với tổng chiều dài gần 2000m, thưởng ngoạn bức tranh phong cảnh đầy màu sắc của cánh rừng nguyên sinh, thung lũng Mường Hoa.</p>
                <p>- Chinh phục đỉnh núi Fansipan với độ cao 3.143m hùng vĩ bằng cáp treo (chi phí tự túc). </p>
                <p>- Lễ Phật tại chùa Trình hay cầu phúc lộc, bình an cho gia đình tại Bích Vân Thiền Tự trong hệ thống cảnh quan tâm linh trên đỉnh Fansipan.</p>
                <p>Tiếp tục hành trình, Quý khách dùng cơm trưa và tham quan: </p>
                <p>- Chinh phục đèo Ô Quy Hồ - con đèo đẹp, hùng vĩ và dài nhất trong Tứ Đại Đỉnh Đèo miền Bắc.</p>
                <p>- Khu du lịch Cổng Trời Ô Quy Hồ - một trong những điểm săn mây, ngắm hoàng hôn cực đẹp tại Sapa.</p>
                <p>Quý khách dùng cơm tối tại Sapa và tự do nghỉ ngơi.</p>
                <p>Nghỉ đêm tại Sapa.</p>
                <h3>Ngày 4 - SAPA - LÀO CAI - HÀ NỘI 03 bữa ăn: (Sáng, Trưa, Chiều)</h3>
                <p>Quý khách ăn sáng và trả phòng khách sạn. Xe khởi hành đưa Quý khách về Hà Nội, trên đường dừng tham quan mua sắm tại Siêu thị Du lịch nông nghiệp OCOP Phú Thọ - chợ Tp Việt Trì và dùng cơm trưa tại nhà hàng địa phương. Đến Hà Nội nhận phòng khách sạn nghỉ ngơi hoặc tự do đi tham quan Hồ Hoàn Kiếm ngắm bên ngoài Tháp Rùa, Đền Ngọc Sơn, Cầu Thê Húc.</p>
                <p>Nghỉ đêm tại Hà Nội.  </p>
                <h3>Ngày 5 - HÀ NỘI - YÊN TỬ - HẠ LONG 03 Bữa ăn: (Sáng, Trưa, Chiều)</h3>
                <p>Quý khách ăn sáng và trả phòng. Xe khởi hành đưa Quý khách đến thành phố biển Hạ Long theo quốc lộ 18, trên đường dừng ăn trưa và tham quan vùng đất thiêng Yên Tử: </p>
                <p>- Tham quan chụp hình Làng Nương và dùng bữa trưa tại Cơm Quê </p>
                <p>- Quý khách lên cáp treo du ngoạn thắng cảnh thiên nhiên Đông Yên Tử (chi phí cáp treo tự túc), nơi còn lưu giữ nhiều di tích lịch sử mệnh danh “Đất tổ Phật giáo Việt Nam”, chiêm bái chùa Một Mái, chùa Hoa Yên - nơi tu hành của Phật Hoàng Trần Nhân Tông khai sinh ra dòng mới Thiền Phái Trúc Lâm, nằm trên lưng chừng núi ở độ cao 516m. Theo dấu chân Phật Hoàng viếng Chùa Đồng có tên Thiên Trúc Tự (chùa Cõi Phật), tọa lạc ở đỉnh cao nhất dãy Yên Tử (1.068m) - ngôi chùa bằng đồng lớn nhất Việt Nam.</p>
                <p>Đến Hạ Long, Quý khách tham quan mua sắm tại Trung tâm Mỹ Ngọc - Trung tâm Ngọc trai lớn nhất miền bắc Việt Nam.Tới đây Quý khách chiêm ngưỡng vẻ đẹp sang trọng, đủ các màu sắc hấp dẫn của những viên ngọc trai được nuôi trong lòng Di sản - Kỳ quan thiên nhiên thế giới vịnh Hạ Long tại phòng trưng bày sản phẩm. Quý khách có thể lựa chọn cho mình và người thân những đồ trang sức ngọc trai Hạ Long như ý và những sản phẩm lưu niệm được chế tác từ vỏ trai, sản phẩm đạt chất lượng OCOP 5 sao cấp Quốc gia đầu tiên của Việt Nam
                </p>
                <p>Dùng cơm chiều và nhận phòng khách sạn nghỉ ngơi. Buổi tối, Quý khách tự do khám phá nhiều hoạt động dịch vụ giải trí sôi nổi tại “phố cổ” Bãi Cháy - nằm cạnh công viên Sun World Hạ Long từ những ẩm thực đường phố đến các quán cà phê siêu dễ thương như Hòn Gai Coffee & Lounge hay thoải mái bung xõa tại The Mini Bar, Brothers Pub,…</p>
                <p>Nghỉ đêm tại Hạ Long. </p>
                <h3>Ngày 6 - VỊNH HẠ LONG - ĐỘNG THIÊN CUNG - NINH BÌNH 03 Bữa ăn: (Sáng, Trưa, Chiều)</h3>
                <p>Quý khách ăn sáng và trả phòng khách sạn. Xe đưa quý khách ra bến tàu, xuống thuyền du ngoạn Vịnh Hạ Long - Thắng cảnh thiên nhiên tuyệt đẹp và vô cùng sống động, được UNESCO công nhận là di sản thiên nhiên Thế giới năm 1994.</p>
                <p>- Động Thiên Cung là một trong những động đẹp nhất ở Hạ Long. Vẻ đẹp nguy nga và lộng lẫy bởi những lớp thạch nhũ và những luồng ánh sáng lung linh.
                </p>
                <p>- Từ trên tàu ngắm nhìn các hòn đảo lớn nhỏ trong Vịnh Hạ Long: Hòn Gà Chọi, Hòn Lư Hương.</p>
                <p>Xe đón Quý khách tại bến thuyền khởi hành đi Ninh Bình - vùng đất mệnh danh là “Nơi mơ đến, chốn mong về” với nhiều di tích văn hóa, thiên nhiên vô cùng đặc sắc.
                </p>
                <p>Buổi tối quý khách tự do khám phá Phố cổ Hoa Lư, một không gian check-in cổ, đẹp, trầm mặc đẹp trở nên lung linh, huyền ảo hơn với sắc màu của những chiếc đèn lồng và Bảo Tháp trên Hồ Kỳ Lân; trải nghiệm nhiều hoạt động trò chơi dân gian và nhiều loại hình văn hóa nghệ thuật từ dân tộc như múa rối nước, nhảy múa Tắc Xình, hát xẩm, ... đến những buổi trình diễn acoustic sẽ được diễn ra vào các buổi tối ngày cuối tuần.</p>
                <p>Nghỉ đêm tại Ninh Bình.</p>
                <h3>Ngày 7 - NINH BÌNH - TRÀNG AN - BÁI ĐÍNH - SÂN BAY NỘI BÀI 02 Bữa ăn: (Sáng, Trưa)</h3>
                <p>Quý khách ăn sáng và trả phòng khách sạn. Xe đưa Quý khách đi tham quan: </p>
                <p>- Khu Du Lịch Tràng An:  Quý khách lên thuyền truyền thống đi tham quan thắng cảnh hệ thống núi đá vôi hùng vĩ và các thung lũng ngập nước, thông với nhau bởi các dòng suối tạo nên các hang động ngập nước quanh năm. Điểm xuyến trong không gian hoang sơ, tĩnh lặng là hình ảnh rêu phong, cổ kính của các mái đình, đền, phủ nằm nép mình dưới chân các dãy núi cao. 
                </p>
                <p>- Viếng Chùa Bái Đính - một quần thể chùa với nhiều kỷ lục Việt Nam như pho tượng phật Di Lặc bằng đồng nặng 80 tấn, hành lang với 500 tượng vị La Hán, tòa Bảo Tháp cao 99m…
                </p>
                <p>Xe khởi hành đưa Quý khách ra sân bay Nội Bài làm thủ tục đón chuyến bay về Tp.HCM. Chia tay Quý khách và kết thúc chương trình du lịch tại sân bay Tân Sơn Nhất.</p>',
                'tour_sale' => '10%',
                'total_seats' => 45,
                'booked_seats' => 0,
                'location_id' => 1,
                'guide_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'tour_name' => 'Côn Đảo Huyền Thoại - Hành Hương Vùng Đất Tâm Linh',
                'tour_image' => 'conDao.jpg',
                'start_day' => '2024-05-16',
                'time' => '2 ngày 1 đêm',
                'star_from' => 'Thành phố Hồ Chí Minh',
                'price' => 5390000,
                'vehicle' => 'Máy bay',
                'tour_description' => 'Đến với Côn Đảo - vùng đất thiêng liêng của Tổ Quốc, Quý khách sẽ được tìm hiểu về lịch sử oai hùng qua các di tích, thăm muôn vàn cảnh đẹp hoang sơ, kỳ bí và thưởng trọn nét yên bình của vùng biển hiền hòa.',
                'tour_schedule' => '<h3>Ngày 1 - TP.HCM - CÔN ĐẢO OAI HÙNG (Ăn trưa, chiều)</h3>
                <p>Quý khách tập trung tại sân bay Tân Sơn Nhất (ga trong nước), Hướng dẫn viên làm thủ tục cho đoàn đáp chuyến bay đến Côn Đảo. </p>
                <p>Đến nơi, xe và Hướng dẫn viên đưa đoàn theo con đường quanh co trải dài hàng cây xanh nối liền từ sân bay về trung tâm thị trấn, chiêm ngưỡng cảnh quan thiên nhiên của núi cao hùng vĩ, xa xa là những hòn đảo ẩn hiện trong sắc xanh của biển cả …  </p>
                <p>Quý khách tham quan các Di tích Văn hóa - Lịch sử hào hùng:</p>
                <p>- Bảo tàng Côn Đảo: nơi trưng bày những kỷ vật về năm tháng lịch sử hào hùng của dân tộc Việt Nam.</p>
                <p>- Dinh Chúa Đảo: nơi sống và làm việc các đời chúa đảo từ năm 1862 - 1975.</p>
                <p>- Trại Phú Hải: trại giam lớn và cổ nhất của hệ thống nhà tù Côn Đảo.</p>
                <p>- Chuồng cọp kiểu Pháp (trại Phú Tường): khám phá hệ thống chuồng Cọp kiên cố được xây dựng ẩn giữa các tòa nhà như mê cung.</p>
                <p>- Chuồng cọp kiểu Mỹ (trại Phú Bình): với các dãy phòng giam nhỏ hẹp và ẩm thấp được xây dựng vào năm 1971. Nơi đây chủ yếu tra tấn tù nhân về tinh thần và cũng là nơi nhận được tin Sài Gòn giải phóng đầu tiên. 
             </p>
                <p>Buổi chiều, Quý khách tham quan:</p>
                <p>- An Sơn Miếu: nghe kể về giai thoại thứ phi Phi Yến với câu hát ru nổi tiếng “Gió đưa cây cải về trời, rau răm ở lại chịu đời đắng cay”. </p>
                <p>- Ngắm nhìn vẻ đẹp của hồ An Hải tham quan Vân Sơn Tự - Ngôi chùa Phật giáo duy nhất ở Côn Đảo như rực rỡ trong bức tranh thủy mặc của mái ngói đỏ tươi giữa nền xanh của rừng cây cổ thụ</p>
                <p>Buổi tối, Quý khách viếng mộ cô Sáu nổi tiếng linh thiêng về đêm.</p>
                <p>Quý khách tự do tản bộ khám phá Côn Đảo yên bình về đêm; thưởng thức cà phê Côn Sơn ngắm cầu tàu 914 hoặc kem dừa đất Côn Đảo thơm ngon, cuốn khách.</p>
                <p>Nghỉ đêm tại Côn Đảo.</p>
                <h3>Ngày 2 - CÔN ĐẢO - TP.HCM (Ăn sáng)</h3>
                <p>Quý khách dùng bữa sáng tại khách sạn, tự do nghỉ ngơi thư giãn và tắm biển. </p>
                <p>Xe đưa Quý khách khởi hành ra sân bay Côn Đảo trở về TP.Hồ Chí Minh. Chia tay Quý khách và kết thúc chuyến du lịch tại sân bay Tân Sơn Nhất.</p>',
                'tour_sale' => '25%',
                'total_seats' => 45,
                'booked_seats' => 0,
                'location_id' => 3,
                'guide_id' => 4,
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






        ]);
    }
}
