<?php
$this->title = "Видеокурсы от Михаила Русакова";

$this->registerMetaTag([
	'name' => 'description',
	'content' => 'Информация обо всех обучающих Видеокурсах от Михаила Русакова.'
]);
$this->registerMetaTag([
	'name' => 'keywords',
	'content' => 'видеокурсы русаков, видеокурсы михаил русаков, обучающие видеокурсы михаил русаков'
])
?>
<div id="custom">
	<h2>Видеокурсы от Михаила Русакова</h2>
	<hr />
	<?php include "likes.php"; ?>
	<div class="post_text">
		<p class="center">
			<img src="/web/images/video.png" alt="Видеокурсы от Михаила Русакова" />
		</p>
		<p>Есть <b>несколько вариантов обучения созданию сайтов</b>. Давайте их разберём:</p>
		<ul>
			<li><b>Книги</b>. Отличный вариант, но есть одна загвоздка. Дело в том, что <b>создание сайтов - это некий процесс, который нужно видеть</b>. А в книге у Вас будет лишь код, но у новичков (исходя из моей практики) будет миллион вопросов. Куда скопировать, как создать файл нужного формата, как его запустить, почему он не отображается, почему не показывается расширение файла, почему, почему, почему. И вот на все эти вопросы ни один автор любой книги ответ дать не может. Он не в состоянии всё предусмотреть и описать все возникающие проблемы в книге.</li>
			<li><b>Семинары и репетиторы</b>. Очень дорогое удовольствие, но, пожалуй, одно из лучших. Единственное, что у Вас будет конкретное расписание занятий, что не всегда удобно. Или, допустим, Вы хотите заниматься уже ближе к ночи, но едва ли Вы сможете найти семинар, который проходит ночью. Плюс не получится заниматься, например, в какой-нибудь очереди в банке.</li>
			<li><b>Институт</b>. Самый полезный вариант с точки зрения будущей работы (диплом-то у Вас будет), но знаний он даёт мало. Это факт, поскольку я сам проучился много лет на программиста, и знаю, что в институтах преподаётся лишь устаревшая информация. И так везде (а я интересовался у многих людей). Фактически, для получения хороших знаний Вам придётся воспользоваться другим способом.</li>
			<li><b>Видеокурсы</b>. Наиболее оптимальный вариант, сочитающий в себе <b>невысокую цену</b> (сравнимую с книгами) и <b>удобство изучения</b> (когда захотите, где захотите и сколько захотите), а также <b>отличную усваивомость материала, поскольку Вы не только слышите все комментарии автора, но ещё и видите</b>, что он делает, как делает и что в конечном итоге получает. Я считаю, что <b>для обучения созданию сайтов самый лучший вариант - это именно видеоинформация</b>.</li>
		</ul>
		<p>Исходя из вышесказанного, я принял решение создавать Видеокурсы, которые помогут <b>новичкам с нуля создавать и раскручивать свои сайты</b>. Но я понимаю, что не у всех есть деньги даже на книгу, поэтому <b>я записал и бесплатные курсы</b>, содержащие базовую информацию, которая Вам позволит уже создавать свои первые сайты.</p>
		<?php $number = 0; foreach ($courses as $course) { $number++; ?>
			<hr />
			<div class="video">
				<h2><?=$number?>. <?=$course->title?></h2>
				<p class="center">
					<img src="<?=$course->img?>" alt="<?=$course->title?>" />
				</p>
				<?=$course->description?>
				<?php if (!$course->did) { ?>
					<p class="right">
						<a rel="external" href="<?=$course->link?>" title="Подробнее">Подробнее</a>
					</p>
					<p class="price">Цена: <?=$course->price?> руб</p>
					<p class="center">
						<a class="order" href="<?=$course->order?>"></a>
					</p>
				<?php } else { include "form_subscribe.php"; } ?>
				</div>
		<?php } ?>

	</div>
</div>						