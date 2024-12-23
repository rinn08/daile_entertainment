@extends('layouts.app')

@section('content')
    <div class="bg-blue-50 py-12 sm:py-16 lg:py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">Giới thiệu về Đại Lê Group</h2>
                <p class="mt-4 text-lg text-gray-500">Công ty TNHH Đại Lê Group chuyên tổ chức sự kiện và truyền thông, mang đến những giải pháp sáng tạo và hiệu quả cho khách hàng.</p>
            </div>

            <div class="mt-12 grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                <div class="flex flex-col items-center text-center">
                    <img class="h-40 w-40 rounded-full object-cover" src="https://via.placeholder.com/150" alt="Team Member">
                    <h3 class="mt-6 text-xl font-medium text-gray-900">Tầm nhìn</h3>
                    <p class="mt-4 text-base text-gray-500">Chúng tôi hướng tới trở thành đối tác hàng đầu trong ngành tổ chức sự kiện và truyền thông tại Việt Nam, mang lại những giải pháp đột phá và sáng tạo.</p>
                </div>
                <div class="flex flex-col items-center text-center">
                    <img class="h-40 w-40 rounded-full object-cover" src="https://via.placeholder.com/150" alt="Team Member">
                    <h3 class="mt-6 text-xl font-medium text-gray-900">Sứ mệnh</h3>
                    <p class="mt-4 text-base text-gray-500">Đại Lê Group cam kết cung cấp dịch vụ tổ chức sự kiện chuyên nghiệp và truyền thông hiệu quả, góp phần nâng cao giá trị thương hiệu cho các đối tác và khách hàng.</p>
                </div>
                <div class="flex flex-col items-center text-center">
                    <img class="h-40 w-40 rounded-full object-cover" src="https://via.placeholder.com/150" alt="Team Member">
                    <h3 class="mt-6 text-xl font-medium text-gray-900">Giá trị cốt lõi</h3>
                    <p class="mt-4 text-base text-gray-500">Chúng tôi luôn đặt khách hàng lên hàng đầu, sáng tạo không ngừng và cam kết cung cấp dịch vụ chất lượng, góp phần vào sự thành công của các sự kiện lớn nhỏ.</p>
                </div>
            </div>

            <div class="mt-16 text-center">
                <h3 class="text-2xl font-semibold text-gray-900">Đội ngũ sáng lập</h3>
                <p class="mt-2 text-lg text-gray-600">Đội ngũ của Đại Lê Group gồm những chuyên gia với nhiều năm kinh nghiệm trong ngành tổ chức sự kiện và truyền thông.</p>
            </div>
            <div class="mt-12 grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                <div class="flex flex-col items-center text-center">
                    <img class="h-40 w-40 rounded-full object-cover" src="https://via.placeholder.com/150" alt="Founder">
                    <h4 class="mt-6 text-xl font-medium text-gray-900">Lê Đại Khởi</h4>
                    <p class="mt-2 text-gray-500">Giám đốc điều hành</p>
                    <p class="mt-4 text-base text-gray-500">Lê Đại Khởi là người sáng lập công ty, với hơn 10 năm kinh nghiệm trong lĩnh vực truyền thông và tổ chức sự kiện.</p>
                </div>
                <div class="flex flex-col items-center text-center">
                    <img class="h-40 w-40 rounded-full object-cover" src="https://via.placeholder.com/150" alt="Founder">
                    <h4 class="mt-6 text-xl font-medium text-gray-900">Trần Thị Lan</h4>
                    <p class="mt-2 text-gray-500">Giám đốc sáng tạo</p>
                    <p class="mt-4 text-base text-gray-500">Trần Thị Lan là chuyên gia sáng tạo với các chiến lược truyền thông đột phá, góp phần làm nên thành công cho các sự kiện lớn của công ty.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
