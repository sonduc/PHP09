$(document).ready(function(){

// #.VÍ DỤ CƠ BẢN VỀ AJAX REQUEST
	// Khởi tạo object
	var xhr = new XMLHttpRequest();
	// Cài đặt thông tin Request
	xhr.open("GET","http://tenmien.com",true);
	// Cài đặt event listener
	xhr.onreadystatechange = function(){
		// kiểm tra các trạng thái đúng
		if(xhr.readyState==4 && xhr.status==200){
			// Nhận kết quả response từ sever và xử lí tiếp tại đây
			var data = xhr.responseText;
		}
	}
	// Bắt đầu gửi Request
	xhr.send();

	
// #1.  CÚ PHÁP CƠ BẢN CỦA AJAX REQUEST 
	// Đây là khởi tạo object của XMLHttpRequest và đặt tên là xhr
	var xhr = new XMLHttpRequest();

	// Tạo from dữ liệu (nếu cần) và đặt tên biến là from_data để gửi kèm theo Request
	var from_data = new FromData();

	// Dùng lệnh .append(key,value) để đưa giá trị và tên của nó vào from đã tạo
	from_data.append("username","dangvanlel");
	from_data.append("password","123465");


// #2. XỬ LÍ  QUÁ THỜI GIAN CHỜ KẾT QUẢ!
	//Cài đặt thời gian tối đa Response sau khi đã gửi Request(nếu cần)(millisecond)
	xhr.timeout = 30000;

	//Bạn sẽ muốn xử lí gì khi timeout xảy ra? Cài event listener cho sự kiện timeout(nếu cần)
	xhr.ontimeout = function(){
		// code chạy khi hết thời gian chờ!
	}


// #3. CAN THIỆP VÀO REQUEST HEADER
	//Khi cần thêm(hoặc đổi) dữ liệu Request Header, có thể dùng lệnh sau để thêm vào
	xhr.setRequestHeader("key","value");

	//Ví dụ 
	xhr.setRequestHeader("Content_Type","application/x-www-from-urlencoded");
	xhr.setRequestHeader("Key-của-tôi","Giá trị gì đó");


// #4. CHỈ ĐỊNH URL SẼ GỬI REQUEST
	xhr.open("TYPE","URL",Asyn);

	// Trong đó, các giá trị tương ứng bao gồm:
	// 		TYPE   : GET hoặc POST 
	// 		URL    : địa chỉ url sẽ gửi Request
	// 		Asyn   : true(bất đồng bộ) hoặc false(đồng bộ)
	
	// -> Asyn đồng bộ nghĩa là js sẽ chờ Response rồi mới chạy tiếp. Còn Asyn bất đồng bộ 
	// nghĩa là sau khi đã Request thì js sẽ chạy tiếp các câu lệnh khác mà ko chờ Response


// #5-1. XỬ LÍ RESPONSE(KẾT QUẢ)
// ->Khi Ajax Request nhận được Response từ Sever, sẽ phát sinh ra 1 sự kiện
//   tên là onreadystatechage. Chúng ta có thể tạo event handle để xử lí sự kiện này như sau:

	xhr.onreadystatechange = function(){
		if(xhr.readyState==4 && xhr.status==200){
			// phần code ở đây sẽ chạy khi nhận được kết quả và ko có lỗi
			var ketqua = xhr.responseText; //Biến kết quả sẽ chứa nội dung trả về của sever
		}
	} 


// #5-2. XỬ LÍ 	RESPONSE(KẾT QUẢ)
// ->Tìm hiểu chi tiết các giá trị của readyState

 		0:chưa tạo kết nối tới sever
 		1: bắt đầu thiết lập kết nối tới sever
 		2: sever đã nhận đc yêu cầu
 		3: sever đang xử lí yêu cầu
 		4: sever đã hồi đáp yêu cầu


// #5-3. XỬ LÍ 	RESPONSE(KẾT QUẢ)
// ->Tìm hiểu chi tiết các giá trị của status(HHTP Status Message)

// HHTP Status Message chia làm 5 nhóm giá trị tương ứng vs 5 loại phản hồi kết quả khác nhau
// Ví dụ: 

// 		#.Nhóm thông tin-Information
 		100,101,103

//		#.Nhóm thành công-Successful
		200->206

//		#.Nhóm chuyển hướng-Redirection
		300->308

//		#.Nhóm lỗi client-Client Error
		400->403,404->417
//		----
			-403: sever từ chối trả lời
			-404: ko tìm thấy nội dung

//		#.Nhóm lỗi sever-Sever Error
		500->505,511
//		----
//			Các mã lỗi từ 500 trở lên có nghĩa code gây ra lỗi xung đột hoặc do web sever
 		
// #6. BẮT ĐẦU GỬI REQUEST
// ->Sau khi đã cài đặt đủ các thành phần(dữ liệu và các handler). Ta có thể bắt đầu gửi
// 	 Request thông qua câu lệnh send() như sau:

	//Gửi Request ko bao gồm dữ liệu gì
	xhr.send();

	//Gửi Request bao gồm dữ liệu from. Với from_data là biến chứa from dữ liệu
	//(xem #1 ở slide6)
	xhr.send(from_data);

	//Gửi Request bao gồm dữ liệu đc cung cấp dưới dạng chuỗi theo nguyên tắc
	// key=value và kết nối bởi kí tự &
	xhr.send("key_1=value_1&key_2=value_2&key_3=value_3");
});