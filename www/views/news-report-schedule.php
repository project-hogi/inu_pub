<?php $pagePath = isset($_pagePath) ? $_pagePath : __FILE__; ?>
<?php $bodyClass = "layout-page module-content"; ?>
<?php require "part/sitemap.php"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<?php require "part/header-sub.php"; ?>
<div class="calendar">
	<div class="calendar-menu">
		<ul>
			<li class="on"><a href="news-report-schedule.php" class="icon icon-calendar"><i class="fa fa-calendar" aria-hidden="true"></i><span class="sr-only">달력</span></a></li>
			<li><a href="news-report-schedule-detail.php" class="icon icon-schedule"><i class="fa fa-bars" aria-hidden="true"></i><span class="sr-only">일정</span></a></li>
		</ul>
	</div>
	<div class="calendar-month">
		<a href="#" class="prev-month"><i class="fa fa-caret-left" aria-hidden="true"></i><span class="sr-only">이전달</span></a>
		<span class="title-month">2016.10</span>
		<a href="#" class="next-month"><i class="fa fa-caret-right" aria-hidden="true"></i><span class="sr-only">다음달</span></a>
		<a href="#" class="today">오늘</a>
	</div>
	<table class="table-calendar">
		<thead>
		<tr>
			<th class="sun">일 <span>sun</span></th>
			<th>월 <span>mon</span></th>
			<th>화 <span>tue</span></th>
			<th>수 <span>wed</span></th>
			<th>목 <span>thu</span></th>
			<th>금 <span>fri</span></th>
			<th class="sat">토 sat</th>
		</tr>
		</thead>
		<tbody>
		<tr>
			<td class="sun disabled">
				<sub><a href="#">30</a></sub>
			</td>
			<td class="disabled">
				<sub><a href="#">31</a></sub>
			</td>
			<td>
				<sub><a href="#">1</a></sub>
			</td>
			<td>
				<sub><a href="#">2</a></sub>
			</td>
			<td>
				<sub><a href="#">3</a></sub>
			</td>
			<td>
				<sub><a href="#">4</a></sub>
			</td>
			<td class="sat">
				<sub><a href="#">5</a></sub>
			</td>
		</tr>
		<tr>
			<td class="sun">
				<sub><a href="#">6</a></sub>
			</td>
			<td>
				<sub><a href="#">7</a></sub>
			</td>
			<td>
				<sub><a href="#">8</a></sub>
				<span class="schedule eq-0  first block-5">
					<span class="icon icon-dday"><span class="sr-only">d-day</span></span>
					&#91;<span class="time">12:30</span>&#93;
					창업자와 교류의 만남
					<div class="pre-content">
						<div class="title">
							<span class="icon icon-dday"><span class="sr-only">d-day</span></span>
							창업자와 교류의 만남
						</div>
						<div class="pre">
							<p>선배 창업자와 교류의 만남</p>
							<p>시간 : 3월2일(월),00:00 – 3월6일(금),23:30</p>
							<p>장소 : 인천대학교 창업지원단 대회의실</p>
							<p>설명 : 창업성공을 위한 선배와의 만남으로 …</p>
							<p>시간 : 3월2일(월),00:00 – 3월6일(금),23:30</p>
							<p>장소 : 인천대학교 창업지원단 대회의실</p>
							<p>설명 : 창업성공을 위한 선배와의 만남으로 …</p>
							<p>시간 : 3월2일(월),00:00 – 3월6일(금),23:30</p>
							<p>장소 : 인천대학교 창업지원단 대회의실</p>
							<p>설명 : 창업성공을 위한 선배와의 만남으로 …</p>
						</div>
						<a href="#" class="link-style">자세히보기</a>
					</div>
				</span>
				<span class="schedule eq-1 first block-2">
					<span class="icon icon-dday"><span class="sr-only">d-day</span></span>
					&#91;<span class="time">12:30</span>&#93;
					2016 년Game Developers 컨퍼런스
					<div class="pre-content">
						<div class="title">
							<span class="icon icon-dday"><span class="sr-only">d-day</span></span>
							창업자와 교류의 만남
						</div>
						<div class="pre">
							<p>선배 창업자와 교류의 만남</p>
							<p>시간 : 3월2일(월),00:00 – 3월6일(금),23:30</p>
							<p>장소 : 인천대학교 창업지원단 대회의실</p>
							<p>설명 : 창업성공을 위한 선배와의 만남으로 …</p>
							<p>시간 : 3월2일(월),00:00 – 3월6일(금),23:30</p>
							<p>장소 : 인천대학교 창업지원단 대회의실</p>
							<p>설명 : 창업성공을 위한 선배와의 만남으로 …</p>
							<p>시간 : 3월2일(월),00:00 – 3월6일(금),23:30</p>
							<p>장소 : 인천대학교 창업지원단 대회의실</p>
							<p>설명 : 창업성공을 위한 선배와의 만남으로 …</p>
						</div>
						<a href="#" class="link-style">자세히보기</a>
					</div>
				</span>
				<span class="schedule eq-2 first last">
					<span class="icon icon-dday"><span class="sr-only">d-day</span></span>
					&#91;<span class="time">12:30</span>&#93;
					2016 년Game Developers 컨퍼런스
					<div class="pre-content">
						<div class="title">
							<span class="icon icon-dday"><span class="sr-only">d-day</span></span>
							창업자와 교류의 만남
						</div>
						<div class="pre">
							<p>선배 창업자와 교류의 만남</p>
							<p>시간 : 3월2일(월),00:00 – 3월6일(금),23:30</p>
							<p>장소 : 인천대학교 창업지원단 대회의실</p>
							<p>설명 : 창업성공을 위한 선배와의 만남으로 …</p>
							<p>시간 : 3월2일(월),00:00 – 3월6일(금),23:30</p>
							<p>장소 : 인천대학교 창업지원단 대회의실</p>
							<p>설명 : 창업성공을 위한 선배와의 만남으로 …</p>
							<p>시간 : 3월2일(월),00:00 – 3월6일(금),23:30</p>
							<p>장소 : 인천대학교 창업지원단 대회의실</p>
							<p>설명 : 창업성공을 위한 선배와의 만남으로 …</p>
						</div>
						<a href="#" class="link-style">자세히보기</a>
					</div>
				</span>
			</td>
			<td>
				<sub><a href="#">9</a></sub>
				<span class="schedule eq-0">
					<span class="icon icon-dday"><span class="sr-only">d-day</span></span>
					&#91;<span class="time">12:30</span>&#93;
					2016 년Game Developers 컨퍼런스
					<div class="pre-content">
						<div class="title">
							<span class="icon icon-dday"><span class="sr-only">d-day</span></span>
							창업자와 교류의 만남
						</div>
						<div class="pre">
							<p>선배 창업자와 교류의 만남</p>
							<p>시간 : 3월2일(월),00:00 – 3월6일(금),23:30</p>
							<p>장소 : 인천대학교 창업지원단 대회의실</p>
							<p>설명 : 창업성공을 위한 선배와의 만남으로 …</p>
							<p>시간 : 3월2일(월),00:00 – 3월6일(금),23:30</p>
							<p>장소 : 인천대학교 창업지원단 대회의실</p>
							<p>설명 : 창업성공을 위한 선배와의 만남으로 …</p>
							<p>시간 : 3월2일(월),00:00 – 3월6일(금),23:30</p>
							<p>장소 : 인천대학교 창업지원단 대회의실</p>
							<p>설명 : 창업성공을 위한 선배와의 만남으로 …</p>
						</div>
						<a href="#" class="link-style">자세히보기</a>
					</div>
				</span>
				<span class="schedule eq-1 last">
					<span class="icon icon-dday"><span class="sr-only">d-day</span></span>
					&#91;<span class="time">12:30</span>&#93;
					2016 년Game Developers 컨퍼런스
					<div class="pre-content">
						<div class="title">
							<span class="icon icon-dday"><span class="sr-only">d-day</span></span>
							창업자와 교류의 만남
						</div>
						<div class="pre">
							<p>선배 창업자와 교류의 만남</p>
							<p>시간 : 3월2일(월),00:00 – 3월6일(금),23:30</p>
							<p>장소 : 인천대학교 창업지원단 대회의실</p>
							<p>설명 : 창업성공을 위한 선배와의 만남으로 …</p>
							<p>시간 : 3월2일(월),00:00 – 3월6일(금),23:30</p>
							<p>장소 : 인천대학교 창업지원단 대회의실</p>
							<p>설명 : 창업성공을 위한 선배와의 만남으로 …</p>
							<p>시간 : 3월2일(월),00:00 – 3월6일(금),23:30</p>
							<p>장소 : 인천대학교 창업지원단 대회의실</p>
							<p>설명 : 창업성공을 위한 선배와의 만남으로 …</p>
						</div>
						<a href="#" class="link-style">자세히보기</a>
					</div>
				</span>
			</td>
			<td>
				<sub><a href="#">10</a></sub>
				<span class="schedule eq-0">
					<span class="icon icon-dday"><span class="sr-only">d-day</span></span>
					&#91;<span class="time">12:30</span>&#93;
					2016 년Game Developers 컨퍼런스
					<div class="pre-content">
						<div class="title">
							<span class="icon icon-dday"><span class="sr-only">d-day</span></span>
							창업자와 교류의 만남
						</div>
						<div class="pre">
							<p>선배 창업자와 교류의 만남</p>
							<p>시간 : 3월2일(월),00:00 – 3월6일(금),23:30</p>
							<p>장소 : 인천대학교 창업지원단 대회의실</p>
							<p>설명 : 창업성공을 위한 선배와의 만남으로 …</p>
							<p>시간 : 3월2일(월),00:00 – 3월6일(금),23:30</p>
							<p>장소 : 인천대학교 창업지원단 대회의실</p>
							<p>설명 : 창업성공을 위한 선배와의 만남으로 …</p>
							<p>시간 : 3월2일(월),00:00 – 3월6일(금),23:30</p>
							<p>장소 : 인천대학교 창업지원단 대회의실</p>
							<p>설명 : 창업성공을 위한 선배와의 만남으로 …</p>
						</div>
						<a href="#" class="link-style">자세히보기</a>
					</div>
				</span>
			</td>
			<td>
				<sub><a href="#">11</a></sub>
				<span class="schedule eq-0">
					<span class="icon icon-dday"><span class="sr-only">d-day</span></span>
					&#91;<span class="time">12:30</span>&#93;
					2016 년Game Developers 컨퍼런스
					<div class="pre-content">
						<div class="title">
							<span class="icon icon-dday"><span class="sr-only">d-day</span></span>
							창업자와 교류의 만남
						</div>
						<div class="pre">
							<p>선배 창업자와 교류의 만남</p>
							<p>시간 : 3월2일(월),00:00 – 3월6일(금),23:30</p>
							<p>장소 : 인천대학교 창업지원단 대회의실</p>
							<p>설명 : 창업성공을 위한 선배와의 만남으로 …</p>
							<p>시간 : 3월2일(월),00:00 – 3월6일(금),23:30</p>
							<p>장소 : 인천대학교 창업지원단 대회의실</p>
							<p>설명 : 창업성공을 위한 선배와의 만남으로 …</p>
							<p>시간 : 3월2일(월),00:00 – 3월6일(금),23:30</p>
							<p>장소 : 인천대학교 창업지원단 대회의실</p>
							<p>설명 : 창업성공을 위한 선배와의 만남으로 …</p>
						</div>
						<a href="#" class="link-style">자세히보기</a>
					</div>
				</span>
			</td>
			<td class="sat">
				<sub><a href="#">12</a></sub>
				<span class="schedule eq-0">
					<span class="icon icon-dday"><span class="sr-only">d-day</span></span>
					&#91;<span class="time">12:30</span>&#93;
					2016 년Game Developers 컨퍼런스
					<div class="pre-content">
						<div class="title">
							<span class="icon icon-dday"><span class="sr-only">d-day</span></span>
							창업자와 교류의 만남
						</div>
						<div class="pre">
							<p>선배 창업자와 교류의 만남</p>
							<p>시간 : 3월2일(월),00:00 – 3월6일(금),23:30</p>
							<p>장소 : 인천대학교 창업지원단 대회의실</p>
							<p>설명 : 창업성공을 위한 선배와의 만남으로 …</p>
							<p>시간 : 3월2일(월),00:00 – 3월6일(금),23:30</p>
							<p>장소 : 인천대학교 창업지원단 대회의실</p>
							<p>설명 : 창업성공을 위한 선배와의 만남으로 …</p>
							<p>시간 : 3월2일(월),00:00 – 3월6일(금),23:30</p>
							<p>장소 : 인천대학교 창업지원단 대회의실</p>
							<p>설명 : 창업성공을 위한 선배와의 만남으로 …</p>
						</div>
						<a href="#" class="link-style">자세히보기</a>
					</div>
				</span>
			</td>
		</tr>
		<tr>
			<td class="sun">
				<sub><a href="#">13</a></sub>
				<span class="schedule eq-0 week-first block-2">
					<span class="icon icon-dday"><span class="sr-only">d-day</span></span>
					&#91;<span class="time">12:30</span>&#93;
					2016 년Game Developers 컨퍼런스
					<div class="pre-content">
						<div class="title">
							<span class="icon icon-dday"><span class="sr-only">d-day</span></span>
							창업자와 교류의 만남
						</div>
						<div class="pre">
							<p>선배 창업자와 교류의 만남</p>
							<p>시간 : 3월2일(월),00:00 – 3월6일(금),23:30</p>
							<p>장소 : 인천대학교 창업지원단 대회의실</p>
							<p>설명 : 창업성공을 위한 선배와의 만남으로 …</p>
							<p>시간 : 3월2일(월),00:00 – 3월6일(금),23:30</p>
							<p>장소 : 인천대학교 창업지원단 대회의실</p>
							<p>설명 : 창업성공을 위한 선배와의 만남으로 …</p>
							<p>시간 : 3월2일(월),00:00 – 3월6일(금),23:30</p>
							<p>장소 : 인천대학교 창업지원단 대회의실</p>
							<p>설명 : 창업성공을 위한 선배와의 만남으로 …</p>
						</div>
						<a href="#" class="link-style">자세히보기</a>
					</div>
				</span>
			</td>
			<td>
				<sub><a href="#">14</a></sub>
				<span class="schedule eq-0 last">
					<span class="icon icon-dday"><span class="sr-only">d-day</span></span>
					&#91;<span class="time">12:30</span>&#93;
					2016 년Game Developers 컨퍼런스
					<div class="pre-content">
						<div class="title">
							<span class="icon icon-dday"><span class="sr-only">d-day</span></span>
							창업자와 교류의 만남
						</div>
						<div class="pre">
							<p>선배 창업자와 교류의 만남</p>
							<p>시간 : 3월2일(월),00:00 – 3월6일(금),23:30</p>
							<p>장소 : 인천대학교 창업지원단 대회의실</p>
							<p>설명 : 창업성공을 위한 선배와의 만남으로 …</p>
							<p>시간 : 3월2일(월),00:00 – 3월6일(금),23:30</p>
							<p>장소 : 인천대학교 창업지원단 대회의실</p>
							<p>설명 : 창업성공을 위한 선배와의 만남으로 …</p>
							<p>시간 : 3월2일(월),00:00 – 3월6일(금),23:30</p>
							<p>장소 : 인천대학교 창업지원단 대회의실</p>
							<p>설명 : 창업성공을 위한 선배와의 만남으로 …</p>
						</div>
						<a href="#" class="link-style">자세히보기</a>
					</div>
				</span>
			</td>
			<td>
				<sub><a href="#">15</a></sub>
			</td>
			<td>
				<sub><a href="#">16</a></sub>
			</td>
			<td>
				<sub><a href="#">17</a></sub>
			</td>
			<td>
				<sub><a href="#">18</a></sub>
			</td>
			<td class="sat">
				<sub><a href="#">19</a></sub>
			</td>
		</tr>
		<tr>
			<td class="sun">
				<sub><a href="#">20</a></sub>
			</td>
			<td>
				<sub><a href="#">21</a></sub>
			</td>
			<td>
				<sub><a href="#">22</a></sub>
			</td>
			<td>
				<sub><a href="#">23</a></sub>
				<span class="schedule first eq-0 last">
					<span class="icon icon-dday"><span class="sr-only">d-day</span></span>
					&#91;<span class="time">12:30</span>&#93;
					2016 년Game Developers 컨퍼런스
					<div class="pre-content">
						<div class="title">
							<span class="icon icon-dday"><span class="sr-only">d-day</span></span>
							창업자와 교류의 만남
						</div>
						<div class="pre">
							<p>선배 창업자와 교류의 만남</p>
							<p>시간 : 3월2일(월),00:00 – 3월6일(금),23:30</p>
							<p>장소 : 인천대학교 창업지원단 대회의실</p>
							<p>설명 : 창업성공을 위한 선배와의 만남으로 …</p>
							<p>시간 : 3월2일(월),00:00 – 3월6일(금),23:30</p>
							<p>장소 : 인천대학교 창업지원단 대회의실</p>
							<p>설명 : 창업성공을 위한 선배와의 만남으로 …</p>
							<p>시간 : 3월2일(월),00:00 – 3월6일(금),23:30</p>
							<p>장소 : 인천대학교 창업지원단 대회의실</p>
							<p>설명 : 창업성공을 위한 선배와의 만남으로 …</p>
						</div>
						<a href="#" class="link-style">자세히보기</a>
					</div>
				</span>
			</td>
			<td>
				<sub><a href="#">24</a></sub>
			</td>
			<td>
				<sub><a href="#">25</a></sub>
			</td>
			<td class="sat">
				<sub><a href="#">26</a></sub>
			</td>
		</tr>
		<tr>
			<td class="sun">
				<sub><a href="#">27</a></sub>
			</td>
			<td>
				<sub><a href="#">28</a></sub>
			</td>
			<td>
				<sub><a href="#">29</a></sub>
			</td>
			<td>
				<sub><a href="#">30</a></sub>
			</td>
			<td>
				<sub><a href="#">31</a></sub>
			</td>
			<td class="disabled">
				<sub><a href="#">1</a></sub>
			</td>
			<td class="sat disabled">
				<sub><a href="#">2</a></sub>
			</td>
		</tr>
		</tbody>
	</table>
	<div class="calendar-footer">
		<p><span class="icon icon-dday"><span class="sr-only">D-day</span></span>해당 일정을 <a href="#" class="link-style">클릭</a> 하시면 상세 내용을 보실 수 있습니다.</p>
	</div>
</div>
<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>
