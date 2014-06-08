<div class="timeline_item">
	<div class="indicator_wrapper">
		<div class="circle weight-{{item.weight}}">
		</div>
		<div class="connector">
		</div>
	</div>
	<div class="item_title">
		{{item.name}}
	</div>
	<div class="dNone item_content">
		<div class="fLeft event_data">
			<a href="<?php echo $this->url('/events/'); ?>{{item.id}}" title="View event details">
				<h2>
					{{item.name}}
				</h2>
			</a>
			<p class="description">
				{{item.description}}
			</p>
		</div>
		<div class="fRight">
		{{#each item.character}}
			<div class="character">
				<a href="<?php echo $this->url('/characters/'); ?>{{this.id}}" title="{{this.name}}">
					<img src="/" title="{{this.name}}">
				</a>
			</div>
		{{/each}}
		</div>
	</div>
</div>