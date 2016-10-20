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
				id => "commercialization" 
		],
		[ 
				"url" => "incubating.php",
				name => "창업보육",
				id => "incubating" 
		],
		[ 
				"url" => "advice.php",
				name => "창업상담",
				id => "advice" 
		],
		[ 
				"url" => "news.php",
				name => "창업소식",
				id => "news" 
		],
		[ 
				"url" => "introduce.php",
				name => "창업지원단 소개",
				id => "introduce" 
		] 
];
