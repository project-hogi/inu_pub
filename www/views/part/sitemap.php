<?php
$sitemap = [
		[
				"url" => "education.php",
				name => "창업교육",
				id => "education",
				children => [
						[
								"url" => "education-lecture.php",
								name => "창업강좌",
								id => "lecture",
								children => [
										[
												"url" => "education-lecture-student.php",
												name => "대학생창업강좌",
												id => "student"
										],
										[
												"url" => "education-lecture-ordinary.php",
												name => "일반인실전창업강좌",
												id => "ordinary"
										]
								]
						],
						[
								"url" => "education-school_system.php",
								name => "창업친화적 학사제도",
								id => "school_system"
						],
						[
								"url" => "education-society.php",
								name => "창업동아리",
								id => "society",
								children => [
										[
												"url" => "education-society-program.php",
												name => "프로그램안내",
												id => "program"
										],
										[
												"url" => "education-society-introduce.php",
												name => "동아리 소개",
												id => "introduce"
										],
										[
												"url" => "education-society-inu_readers.php",
												name => "INU 리더스",
												id => "inu_readers"
										]
								]
						],
						[
								"url" => "education-experience.php",
								name => "창업체험학습",
								id => "experience",
								children => [
										[
												"url" => "education-experience-1.php",
												name => "창업경진대회",
												id => "1"
										],
										[
												"url" => "education-experience-2.php",
												name => "대학생창업캠프",
												id => "2"
										],
										[
												"url" => "education-experience-3.php",
												name => "비즈쿨 프로그램",
												id => "3",
												children => [
														[
																"url" => "education-experience-3-1.php",
																name => "비즈쿨IP리더",
																id => "1"
														],
														[
																"url" => "education-experience-3-2.php",
																name => "비즈쿨 창업현장 연수",
																id => "2"
														],
														[
																"url" => "education-experience-3-3.php",
																name => "비즈쿨 드림콘서트",
																id => "3"
														]
												]
										],
										[
												"url" => "education-experience-4.php",
												name => "어린이 창업캠프",
												id => "4"
										],
										[
												"url" => "education-experience-5.php",
												name => "창업붐업이벤트",
												id => "5",
												children => [
														[
																"url" => "education-experience-5-1.php",
																name => "한마당투어",
																id => "1"
														],
														[
																"url" => "education-experience-5-2.php",
																name => "창업페스티벌",
																id => "2"
														]
												]
										],
										[
												"url" => "education-experience-6.php",
												name => "글로벌 창업",
												id => "6",
												children => [
														[
																"url" => "education-experience-6-1.php",
																name => "글로벌셀러",
																id => "1"
														],
														[
																"url" => "education-experience-6-2.php",
																name => "프론티어",
																id => "2"
														]
												]
										]
								]
						],
						[
								"url" => "education-sk.php",
								name => "SK 청년비상",
								id => "sk",
								children => [
										[
												"url" => "education-sk-introduce.php",
												name => "SK프로그램 소개",
												id => "introduce"
										],
										[
												"url" => "education-sk-lecture.php",
												name => "SK창업강좌",
												id => "lecture"
										],
										[
												"url" => "education-sk-society.php",
												name => "SK창업동아리",
												id => "society"
										],
										[
												"url" => "education-sk-competition.php",
												name => "SK창업경진대회",
												id => "competition"
										]
								]
						]
				]
		],
		[
				"url" => "commercialization.php",
				name => "창업사업화",
				id => "commercialization",
				children => [
						[
								"url" => "commercialization-business.php",
								name => "창업아이템사업화",
								id => "business",
						],
						[
								"url" => "commercialization-succeeding.php",
								name => "창업아이템사업화 후속",
								id => "succeeding",
						],
						[
								"url" => "commercialization-root.php",
								name => "창업뿌리가꾸기",
								id => "root",
						],
						[
								"url" => "commercialization-idea.php",
								name => "INU아이디어센터",
								id => "idea",
						],
						[
								"url" => "commercialization-angel.php",
								name => "엔젤투자",
								id => "angel",
								children => [
										[
											"url" => "commercialization-angel-introduce.php",
											name => "엔젤클럽 소개",
											id => "introduce",
										],
										[
											"url" => "commercialization-angel-guide.php",
											name => "IR 안내",
											id => "guide",
										],
										[
											"url" => "commercialization-angel-cloud.php",
											name => "클라우드 펀딩",
											id => "cloud",
										]
							]
						],
						[
								"url" => "commercialization-family.php",
								name => "가족회사",
								id => "family",
						]
				]
		],
		[
				"url" => "incubating.php",
				name => "창업보육",
				id => "incubating",
				children => [
						[
								"url" => "incubating-benefit.php",
								name => "시설안내 및 혜택",
								id => "benefit",
						],
						[
								"url" => "incubating-guide.php",
								name => "입주기업 안내",
								id => "guide",
						]
				]
		],
		[
				"url" => "advice.php",
				name => "창업상담",
				id => "advice",
				children => [
						[
								"url" => "advice-counsel.php",
								name => "창업상담",
								id => "counsel",
								children => [
										[
												"url" => "advice-counsel-enterprise.php",
												name => "사업화",
												id => "enterprise",
										],
										[
												"url" => "advice-counsel-marketing.php",
												name => "마케팅",
												id => "marketing",
										],
										[
												"url" => "advice-counsel-finance.php",
												name => "재무관리",
												id => "finance",
										],
										[
												"url" => "advice-counsel-surety.php",
												name => "보증, 기술금융보증",
												id => "surety",
										],
										[
												"url" => "advice-counsel-invest.php",
												name => "투자, IR",
												id => "invest",
										],
										[
												"url" => "advice-counsel-law.php",
												name => "법률, 지재권",
												id => "law",
										]
								]
						],
						[
								"url" => "advice-move.php",
								name => "BI 입주상담",
								id => "move",
						],
						[
								"url" => "advice-education.php",
								name => "창업교육",
								id => "education",
						]
				]
		],
		[
				"url" => "news.php",
				name => "창업소식",
				id => "news",
				children => [
						[
								"url" => "news-report.php",
								name => "창업소식",
								id => "report",
								children => [
										[
												"url" => "news-report-enterprise.php",
												name => "공지사항",
												id => "enterprise",
										],
										[
												"url" => "news-report-marketing.php",
												name => "창업뉴스",
												id => "marketing",
										],
										[
												"url" => "news-report-supporter.php",
												name => "창업서포터즈",
												id => "supporter",
										],
										[
												"url" => "news-report-schedule.php",
												name => "행사일정",
												id => "schedule",
										]
								]
						],
						[
								"url" => "news-job.php",
								name => "구인정보",
								id => "job",
						],
						[
								"url" => "news-rule.php",
								name => "창업법규정",
								id => "rule",
						]
				]
		],
		[
				"url" => "introduce.php",
				name => "창업지원단 소개",
				id => "introduce",
				children => [
						[
								"url" => "introduce-greeting.php",
								name => "인사말",
								id => "greeting"
						],
						[
								"url" => "introduce-place.php",
								name => "시설안내(창업카페)",
								id => "place",
						],
						[
								"url" => "introduce-vision.php",
								name => "비전 및 목표",
								id => "vision",
						],
						[
								"url" => "introduce-history.php",
								name => "연혁",
								id => "history"
						],
						[
								"url" => "introduce-work.php",
								name => "주요업무",
								id => "work",
						],
						[
								"url" => "introduce-people.php",
								name => "조직도",
								id => "people",
						],
						[
								"url" => "introduce-way.php",
								name => "오시는길",
								id => "way",
						]
				]
		] 
];
